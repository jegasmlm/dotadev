<?php
/**
 * SideFixture
 *
 */
class SideFixture extends CakeTestFixture {

/**
<<<<<<< HEAD
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Side');
=======
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'name' => 'Radiant',
			'created' => '2014-09-06 22:08:43',
			'modified' => '2014-09-06 22:08:43'
		),
		array(
			'id' => '2',
			'name' => 'Dire',
			'created' => '2014-09-06 22:08:48',
			'modified' => '2014-09-06 22:08:48'
		),
	);

}
