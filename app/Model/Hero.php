<?php

App::uses('AppModel', 'Model');
/**
 * Hero Model
 *
 * @property Side $Side
 * @property Group $Group
 * @property RolesHero $RolesHero
 * @property User $User
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
			),
		),
		'side_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'attack_min' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'attack_max' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'speed' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'shield' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'base_strength' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'lvl_strength' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'base_agility' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'lvl_agility' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'base_intelligence' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'lvl_intelligence' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'heroes_users',
			'foreignKey' => 'hero_id',
			'associationForeignKey' => 'user_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

/**
 * Funtion to get the hero with role name
 * @param $id
 * @return array
 */
    public function getHero($id){
        $this->recursive=-1;
        return $this->find('first', array('conditions'=>array('Hero.id'=>$id)));
    }

    public function view($id){
        $options = array('conditions' => array('Hero.' . $this->primaryKey => $id), 'recursive' => 2);
        return $this->find('first', $options);
    }

    public function getRandomTeam(){
	$recursive = $this->recursive;
        $this->recursive = -1;

        $heroesId = array();
        for($i=0; $i<5; $i++){
            $heroes[$i] = $this->find('first', array('conditions'=>array('NOT'=>array('Hero.id'=>$heroesId)), 'order'=>'rand()'));
            $heroesId[$i] = $heroes[$i]['Hero']['id'];
        }

        for($i=0; $i<5; $i++){
            $heroes[$i]['Roles'] = $this->RolesHero->getRolesHero($heroes[$i]['Hero']['id']);
        }

	$this->recursive = $recursive;
        return $heroes;
    }

    public function getHeroByGroup($group_id){
        return $this->find('all', array('conditions' => array('Hero.group_id' => $group_id)));
    }

    public function getHeroBySide($side_id){
        return $this->find('all', array('conditions' => array('Hero.side_id' => $side_id)));
    }

    public function getHeroByGroupAndSide($group_id, $side_id){
        return $this->find('all', array('conditions' => array('Hero.group_id' => $group_id, 'Hero.side_id' => $side_id)));
    }

    public function getHeroOrderedByGroups(){
        $heroes['radiant']['RadiantStr'] = $this-> getHeroByGroupAndSide(1,1);
        $heroes['radiant']['RadiantAgi'] = $this-> getHeroByGroupAndSide(2,1);
        $heroes['radiant']['RadiantInt'] = $this-> getHeroByGroupAndSide(3,1);

        $heroes['dire']['DireStr'] = $this-> getHeroByGroupAndSide(1,2);
        $heroes['dire']['DireAgi'] = $this-> getHeroByGroupAndSide(2,2);
        $heroes['dire']['DireInt'] = $this-> getHeroByGroupAndSide(3,2);

        return $heroes;
    }
}
