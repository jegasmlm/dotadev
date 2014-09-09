<?php
App::uses('AppModel', 'Model');
/**
 * Hero Model
 *
 * @property Side $Side
 * @property Group $Group
 * @property RolesHero $RolesHero
 * @property UsersHero $UsersHero
 */
class Hero extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'side_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'group_id' => array(
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
		'Side' => array(
			'className' => 'Side',
			'foreignKey' => 'side_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'RolesHero' => array(
			'className' => 'RolesHero',
			'foreignKey' => 'hero_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UsersHero' => array(
			'className' => 'UsersHero',
			'foreignKey' => 'hero_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

    public $hasAndBelongsToMany = array(
        'Counter' => array(
            'className' => 'Hero',
            'joinTable' => 'heroes_counters',
            'foreignKey' => 'hero_id',
            'associationForeignKey' => 'counter_id',
            'unique' => true,
        )
    );

/**
 * Funtion to get the hero with role name
 * @param $id
 * @return array
 */
    public function view($id){
        $options = array('conditions' => array('Hero.' . $this->primaryKey => $id), 'recursive' => 2);
        return $this->find('first', $options);
    }

    public function getTopRoles($id){
        return $this->RolesHero->getTopRolesByHeroId($id);
    }

    public function getTopRolesTest($id){
        return $this->RolesHero->find('all', array('conditions' => array('RolesHero.hero_id' => $id), 'order' => array('RolesHero.level' => 'desc')));
    }

    public function getRandomTeam(){
        $heroes = $this->find('all');
        //$rand = rand(0, count($heroes)-1);
        //debug($rand);
        return array($heroes[rand(0, count($heroes)-1)],
            $heroes[rand(0, count($heroes)-1)],
            $heroes[rand(0, count($heroes)-1)],
            $heroes[rand(0, count($heroes)-1)],
            $heroes[rand(0, count($heroes)-1)]);
    }

    public function getRandomHeroeByRole($role_id){
        return $this->RolesHero->find('first', array('conditions' => array('RolesHero.role_id' => $role_id)));
    }

    public function getRandomTeamByStrategy($id){
        return $this->RolesHero->getRandomTeamByStrategy($id);
    }

    public function getHeroByGroup($group_id){

    }

    public function getHeroBySide($side_id){

    }

    public function getHeroByGroupAndSide($group_id, $side_id){
        return $this->find('all', array('conditions' => array('Hero.group_id' => $group_id, 'Hero.side_id' => $side_id), 'recursive' => -1));
    }
}
