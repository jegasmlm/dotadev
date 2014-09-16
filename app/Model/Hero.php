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
        $this->recursive = -1;
        //$heroes = $this->find('all');

        //$randId = array(0, 0, 0, 0, 0);
        $heroesId = array();
        for($i=0; $i<5; $i++){
            $heroes[$i] = $this->find('first', array('conditions'=>array('NOT'=>array('Hero.id'=>$heroesId)), 'order'=>'rand()'));
            $heroesId[$i] = $heroes[$i]['Hero']['id'];
            /*$rand = rand(0, count($heroes)-$i-1);
            for($j=0; $j<$i; $j++){
                if($rand >= $randId[$j])
                    $rand++;
            }
            $randId[$i] = $rand;*/
        }

        for($i=0; $i<5; $i++){
            $heroes[$i]['Roles'] = $this->RolesHero->getRolesHero($heroes[$i]['Hero']['id']);
        }

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
        $heroes['radiant']['RadiantStr'] = $this->getHeroByGroupAndSide(1,1);
        $heroes['radiant']['RadiantAgi'] = $this->getHeroByGroupAndSide(2,1);
        $heroes['radiant']['RadiantInt'] = $this->getHeroByGroupAndSide(3,1);

        $heroes['dire']['DireStr'] = $this->getHeroByGroupAndSide(1,2);
        $heroes['dire']['DireAgi'] = $this->getHeroByGroupAndSide(2,2);
        $heroes['dire']['DireInt'] = $this->getHeroByGroupAndSide(3,2);

        return $heroes;
    }
}
