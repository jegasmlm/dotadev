<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 * @property Strategy $Strategy
 * @property StrategiesRole $StrategiesRole
 */
class Role extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
    public $hasMany = array(
        'StrategiesRole' => array(
            'className' => 'StrategiesRole',
            'foreignKey' => 'role_id',
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
	/*public $hasAndBelongsToMany = array(
		'Strategy' => array(
			'className' => 'Strategy',
			'joinTable' => 'strategies_roles',
			'foreignKey' => 'role_id',
			'associationForeignKey' => 'strategy_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);*/

    public function getRoles(){
        $this->recursive=-1;
        return $this->find('all');
    }

    public function getRolesByStrategy($id){
        $this->recursive=-1;
        $strategiesRole = $this->StrategiesRole->getRolesStrategy($id);
        for($i=0;$i<count($strategiesRole);$i++)
            $roles[$i] = $this->find('first', array('conditions' => array('Role.id' => $strategiesRole[$i]['StrategiesRole']['role_id'])));
        return $roles;
    }

}
