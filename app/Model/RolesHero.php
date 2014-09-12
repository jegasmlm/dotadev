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

    public function getTopRolesByHeroId($id){
        return $this->find('all', array('conditions' => array('RolesHero.hero_id' => $id), 'order' => array('RolesHero.level' => 'desc')));
    }

    public function getRandomTeamByStrategy($id)
    {
        $roles = $this->Role->getRolesByStrategy($id);
        $heroesByRole = array();
        for ($i = 0; $i < 5; $i++) {
            $heroesByRole[$i] = $this->find('all', array('conditions' => array('role_id' => $roles[$i]['Role']['id'], 'level >=' => 5), 'order' => 'rand()'));
        }

        for ($i = 0; $i < 5; $i++) {
            $string = "";
            for ($j = 0; $j < count($heroesByRole[$i]); $j++) {
                $string .= $heroesByRole[$i][$j]['Hero']['name'] ." ". $heroesByRole[$i][$j]['Role']['name'] ." ". $heroesByRole[$i][$j]['RolesHero']['level']."'\n'";
            }
            debug($string);
        }

        for ($i = 0; $i < 5; $i++) {
            $team[$i] = $heroesByRole[$i][0];
        }

        return $team;
    }
}
