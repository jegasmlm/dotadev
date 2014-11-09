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
