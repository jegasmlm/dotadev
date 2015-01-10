<?php
/**
 * StrategiesRoleFixture
 *
 */
class StrategiesRoleFixture extends CakeTestFixture {

/**
<<<<<<< HEAD
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'StrategiesRole');
=======
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'strategy_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2

/**
 * Records
 *
 * @var array
 */
	public $records = array(
<<<<<<< HEAD
		array(
			'id' => '3',
			'role_id' => '3',
			'strategy_id' => '1',
			'created' => '2014-09-08 14:59:29',
			'modified' => '2014-09-08 14:59:29'
		),
		array(
			'id' => '4',
			'role_id' => '1',
			'strategy_id' => '1',
			'created' => '2014-09-08 15:00:12',
			'modified' => '2014-09-08 15:00:12'
		),
		array(
			'id' => '5',
			'role_id' => '2',
			'strategy_id' => '1',
			'created' => '2014-09-08 15:00:19',
			'modified' => '2014-09-08 15:00:19'
		),
		array(
			'id' => '6',
			'role_id' => '4',
			'strategy_id' => '1',
			'created' => '2014-09-08 15:00:23',
			'modified' => '2014-09-08 15:00:23'
		),
		array(
			'id' => '7',
			'role_id' => '10',
			'strategy_id' => '1',
			'created' => '2014-09-08 15:00:29',
			'modified' => '2014-09-08 15:00:29'
		),
=======
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
	);

}
