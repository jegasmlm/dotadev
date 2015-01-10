<?php
/**
 * RoleFixture
 *
 */
class RoleFixture extends CakeTestFixture {

/**
<<<<<<< HEAD
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Role');
=======
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
		array(
			'id' => '1',
			'name' => 'Pusher',
			'created' => '2014-09-06 20:54:41',
			'modified' => '2014-09-06 20:54:41'
		),
		array(
			'id' => '2',
			'name' => 'Disabler',
			'created' => '2014-09-06 21:04:59',
			'modified' => '2014-09-06 21:04:59'
		),
		array(
			'id' => '3',
			'name' => 'Initiator',
			'created' => '2014-09-06 22:08:41',
			'modified' => '2014-09-06 22:08:41'
		),
		array(
			'id' => '4',
			'name' => 'Durable',
			'created' => '2014-09-06 22:08:54',
			'modified' => '2014-09-06 22:08:54'
		),
		array(
			'id' => '5',
			'name' => 'Jungler',
			'created' => '2014-09-06 22:09:02',
			'modified' => '2014-09-06 22:09:02'
		),
		array(
			'id' => '6',
			'name' => 'Pusher',
			'created' => '2014-09-06 22:09:08',
			'modified' => '2014-09-06 22:09:08'
		),
		array(
			'id' => '7',
			'name' => 'Nuker',
			'created' => '2014-09-06 22:09:14',
			'modified' => '2014-09-06 22:09:14'
		),
		array(
			'id' => '8',
			'name' => 'Lane Support',
			'created' => '2014-09-06 22:09:25',
			'modified' => '2014-09-06 22:09:25'
		),
		array(
			'id' => '9',
			'name' => 'Escape',
			'created' => '2014-09-06 22:09:32',
			'modified' => '2014-09-06 22:09:32'
		),
		array(
			'id' => '10',
			'name' => 'Carry',
			'created' => '2014-09-06 22:09:40',
			'modified' => '2014-09-06 22:09:40'
		),
<<<<<<< HEAD
=======
		array(
			'id' => '11',
			'name' => 'Support',
			'created' => '2014-09-06 22:09:45',
			'modified' => '2014-09-06 22:09:45'
		),
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
	);

}
