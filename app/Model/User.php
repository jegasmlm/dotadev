<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Hero $Hero
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Hero' => array(
			'className' => 'Hero',
			'joinTable' => 'users_heroes',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'hero_id',
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
