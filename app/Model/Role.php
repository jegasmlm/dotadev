<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 * @property Hero $Hero
 * @property Strategy $Strategy
 */
class Role extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Hero' => array(
			'className' => 'Hero',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
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
	);

}
