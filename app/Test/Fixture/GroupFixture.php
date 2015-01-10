<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
<<<<<<< HEAD
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Group');
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
			'name' => 'Strength',
			'created' => '2014-09-06 21:01:43',
			'modified' => '2014-09-06 21:01:43'
		),
		array(
			'id' => '2',
			'name' => 'Agility',
			'created' => '2014-09-06 21:01:58',
			'modified' => '2014-09-06 21:01:58'
		),
		array(
			'id' => '3',
			'name' => 'Intelligence',
			'created' => '2014-09-06 21:04:27',
			'modified' => '2014-09-06 21:04:42'
		),
	);

}
