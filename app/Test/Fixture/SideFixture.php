<?php
/**
 * SideFixture
 *
 */
class SideFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'Side');

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
