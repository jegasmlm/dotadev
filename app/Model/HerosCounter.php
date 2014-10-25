<?php

App::uses('AppModel', 'Model');
/**
 * HeroesCounter Model
 *
 * @property Hero $Hero
 * @property Counter $Counter
 */
class HerosCounter extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'counter_id' => array(
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
		'Hero' => array(
			'className' => 'Hero',
			'foreignKey' => 'hero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Counter' => array(
			'className' => 'Counter',
			'foreignKey' => 'counter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
