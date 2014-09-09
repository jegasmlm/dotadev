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

    public function getRolesByStrategy($id){
        return $this->StrategiesRole->find('all', array('condition' => array('StrategiesRole.role_id' => $id)));
    }

}
