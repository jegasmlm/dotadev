<?php
/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Group');

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
