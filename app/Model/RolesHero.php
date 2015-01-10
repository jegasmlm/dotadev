<?php
App::uses('AppModel', 'Model');
/**
 * RolesHero Model
 *
 * @property Role $Role
 * @property Hero $Hero
 */
class RolesHero extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'role_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'hero_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'level' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hero' => array(
			'className' => 'Hero',
			'foreignKey' => 'hero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
* Obtain the roles of the hero organized from 10 to 0
*
* @param int $id Id of hero
* @return Hero
*/
    public function getRolesHero($hero_id){
        $this->recursive=-1;
        return $this->find('all', array('conditions'=>array('RolesHero.hero_id'=>$hero_id), 'order'=>array('RolesHero.role_id'=>'asc')));
    }

    public function getRolesHeroFromTeam($heroes_id){
        $this->recursive=-1;
        return $this->find('all', array('conditions'=>array('RolesHero.hero_id'=>$heroes_id), 'order'=>array('RolesHero.role_id'=>'asc')));
    }


    public function getTopRolesByHero($id){
        return $this->find('all', array('conditions' => array('RolesHero.hero_id' => $id), 'order' => array('RolesHero.level' => 'desc')));
    }

    public function getRandomHeroeByRole($role_id){
        return $this->find('first', array('conditions' => array('RolesHero.role_id' => $role_id, 'RolesHero.level >' => 5), 'order' => array('RolesHero.role_id' => 'asc')));
    }

    public function getRandomTeamByRoles($roles){
        $heroesByRole = array();
        for ($i = 0; $i < 5; $i++) {
            $heroId = $this->find('first', array('conditions' => array('role_id' => $roles[$i]['Role']['id'], 'level >' => 6, 'NOT'=>array('RolesHero.hero_id'=>$heroesByRole)), 'order' => 'rand()', 'fields'=>'RolesHero.hero_id'));
            $heroesByRole[$i] = $heroId['RolesHero']['hero_id'];
        }

        for ($i = 0; $i < 5; $i++) {
            $team[$i] = $this->Hero->getHero($heroesByRole[$i]);
            $team[$i]['Roles'] = $this->getRolesHero($heroesByRole[$i]);
        }

        return $team;
    }

    public function getAverageLevelsPerRole($heroes){
        $this->recursive=-1;
        $roles = $this->Role->getRoles();

        for($i=0; $i<count($heroes); $i++){
            $heroesId[$i] = $heroes[$i]['Hero']['id'];
        }

        //$max=0;

        $this->virtualFields = array('total'=>'SUM(RolesHero.level)');

        for($i=0; $i<count($roles); $i++){
            $avgLevel = $this->find('all', array('fields'=>array('total'), 'conditions' => array('RolesHero.hero_id'=>$heroesId, 'RolesHero.role_id'=>$roles[$i]['Role']['id'])));
            $roles[$i]['Role']['avgLevel'] = $avgLevel[0]['RolesHero']['total'];
            //if($max < $roles[$i]['Role']['avgLevel']) $max = $roles[$i]['Role']['avgLevel'];
        }

        for($i=0; $i<count($roles); $i++){
            $roles[$i]['Role']['avgLevel'] = ($roles[$i]['Role']['avgLevel']/50)*100;
        }

        return $roles;
    }
}
