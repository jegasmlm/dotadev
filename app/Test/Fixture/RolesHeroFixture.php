<?php
/**
 * RolesHeroFixture
 *
 */
class RolesHeroFixture extends CakeTestFixture {

/**
<<<<<<< HEAD
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'RolesHero');
=======
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'hero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'level' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'role_id' => '3',
			'hero_id' => '1',
			'level' => '10',
			'created' => '2014-09-06 23:17:27',
			'modified' => '2014-09-06 23:17:27'
		),
		array(
			'id' => '2',
			'role_id' => '2',
			'hero_id' => '1',
			'level' => '10',
			'created' => '2014-09-06 23:17:39',
			'modified' => '2014-09-06 23:17:39'
		),
		array(
			'id' => '3',
			'role_id' => '4',
			'hero_id' => '1',
			'level' => '1',
			'created' => '2014-09-06 23:17:52',
			'modified' => '2014-09-06 23:17:52'
		),
		array(
			'id' => '4',
			'role_id' => '7',
			'hero_id' => '1',
			'level' => '10',
			'created' => '2014-09-06 23:18:14',
			'modified' => '2014-09-06 23:18:14'
		),
		array(
			'id' => '5',
			'role_id' => '8',
			'hero_id' => '1',
			'level' => '1',
			'created' => '2014-09-06 23:18:29',
			'modified' => '2014-09-06 23:18:29'
		),
		array(
			'id' => '6',
			'role_id' => '11',
			'hero_id' => '1',
			'level' => '5',
			'created' => '2014-09-06 23:18:36',
			'modified' => '2014-09-06 23:18:36'
		),
		array(
			'id' => '7',
			'role_id' => '3',
			'hero_id' => '2',
			'level' => '10',
			'created' => '2014-09-06 23:21:44',
			'modified' => '2014-09-06 23:21:44'
		),
		array(
			'id' => '8',
			'role_id' => '2',
			'hero_id' => '2',
<<<<<<< HEAD
			'level' => '1',
			'created' => '2014-09-06 23:21:53',
			'modified' => '2014-09-06 23:21:53'
=======
			'level' => '6',
			'created' => '2014-09-06 23:21:53',
			'modified' => '2014-09-07 13:27:18'
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
		),
		array(
			'id' => '9',
			'role_id' => '1',
			'hero_id' => '1',
			'level' => '0',
			'created' => '2014-09-06 23:22:09',
			'modified' => '2014-09-06 23:22:09'
		),
		array(
			'id' => '10',
			'role_id' => '5',
			'hero_id' => '1',
			'level' => '0',
			'created' => '2014-09-06 23:22:16',
			'modified' => '2014-09-06 23:22:16'
		),
<<<<<<< HEAD
=======
		array(
			'id' => '11',
			'role_id' => '9',
			'hero_id' => '1',
			'level' => '0',
			'created' => '2014-09-06 23:22:23',
			'modified' => '2014-09-06 23:22:23'
		),
		array(
			'id' => '12',
			'role_id' => '10',
			'hero_id' => '1',
			'level' => '0',
			'created' => '2014-09-06 23:22:29',
			'modified' => '2014-09-06 23:22:29'
		),
		array(
			'id' => '13',
			'role_id' => '4',
			'hero_id' => '2',
			'level' => '10',
			'created' => '2014-09-06 23:22:44',
			'modified' => '2014-09-06 23:22:44'
		),
		array(
			'id' => '14',
			'role_id' => '5',
			'hero_id' => '2',
			'level' => '1',
			'created' => '2014-09-06 23:23:27',
			'modified' => '2014-09-06 23:23:27'
		),
		array(
			'id' => '15',
			'role_id' => '6',
			'hero_id' => '2',
			'level' => '1',
			'created' => '2014-09-06 23:23:39',
			'modified' => '2014-09-06 23:23:39'
		),
		array(
			'id' => '16',
			'role_id' => '7',
			'hero_id' => '2',
			'level' => '1',
			'created' => '2014-09-06 23:23:48',
			'modified' => '2014-09-06 23:23:48'
		),
		array(
			'id' => '17',
			'role_id' => '8',
			'hero_id' => '2',
			'level' => '1',
			'created' => '2014-09-06 23:23:59',
			'modified' => '2014-09-06 23:23:59'
		),
		array(
			'id' => '18',
			'role_id' => '9',
			'hero_id' => '2',
			'level' => '0',
			'created' => '2014-09-06 23:24:11',
			'modified' => '2014-09-06 23:24:11'
		),
		array(
			'id' => '19',
			'role_id' => '10',
			'hero_id' => '2',
			'level' => '0',
			'created' => '2014-09-06 23:24:16',
			'modified' => '2014-09-06 23:24:16'
		),
		array(
			'id' => '20',
			'role_id' => '11',
			'hero_id' => '2',
			'level' => '0',
			'created' => '2014-09-06 23:24:23',
			'modified' => '2014-09-06 23:24:23'
		),
		array(
			'id' => '21',
			'role_id' => '1',
			'hero_id' => '3',
			'level' => '1',
			'created' => '2014-09-06 23:24:34',
			'modified' => '2014-09-06 23:24:34'
		),
		array(
			'id' => '22',
			'role_id' => '2',
			'hero_id' => '3',
			'level' => '5',
			'created' => '2014-09-06 23:24:56',
			'modified' => '2014-09-06 23:24:56'
		),
		array(
			'id' => '23',
			'role_id' => '3',
			'hero_id' => '3',
			'level' => '1',
			'created' => '2014-09-06 23:25:05',
			'modified' => '2014-09-06 23:25:05'
		),
		array(
			'id' => '24',
			'role_id' => '4',
			'hero_id' => '3',
			'level' => '1',
			'created' => '2014-09-06 23:25:16',
			'modified' => '2014-09-06 23:25:16'
		),
		array(
			'id' => '25',
			'role_id' => '5',
			'hero_id' => '3',
			'level' => '0',
			'created' => '2014-09-06 23:25:59',
			'modified' => '2014-09-06 23:25:59'
		),
		array(
			'id' => '26',
			'role_id' => '6',
			'hero_id' => '3',
			'level' => '5',
			'created' => '2014-09-06 23:26:23',
			'modified' => '2014-09-06 23:26:23'
		),
		array(
			'id' => '27',
			'role_id' => '7',
			'hero_id' => '3',
			'level' => '1',
			'created' => '2014-09-06 23:26:57',
			'modified' => '2014-09-06 23:26:57'
		),
		array(
			'id' => '28',
			'role_id' => '8',
			'hero_id' => '3',
			'level' => '0',
			'created' => '2014-09-06 23:27:08',
			'modified' => '2014-09-06 23:27:08'
		),
		array(
			'id' => '29',
			'role_id' => '9',
			'hero_id' => '3',
			'level' => '1',
			'created' => '2014-09-06 23:27:15',
			'modified' => '2014-09-06 23:27:15'
		),
		array(
			'id' => '30',
			'role_id' => '10',
			'hero_id' => '3',
			'level' => '10',
			'created' => '2014-09-06 23:27:23',
			'modified' => '2014-09-06 23:27:23'
		),
		array(
			'id' => '31',
			'role_id' => '11',
			'hero_id' => '3',
			'level' => '1',
			'created' => '2014-09-06 23:27:30',
			'modified' => '2014-09-06 23:27:30'
		),
		array(
			'id' => '32',
			'role_id' => '3',
			'hero_id' => '4',
			'level' => '5',
			'created' => '2014-09-06 23:28:01',
			'modified' => '2014-09-06 23:28:01'
		),
		array(
			'id' => '33',
			'role_id' => '2',
			'hero_id' => '4',
			'level' => '5',
			'created' => '2014-09-06 23:28:11',
			'modified' => '2014-09-06 23:28:11'
		),
		array(
			'id' => '34',
			'role_id' => '4',
			'hero_id' => '4',
			'level' => '5',
			'created' => '2014-09-06 23:28:18',
			'modified' => '2014-09-06 23:28:18'
		),
		array(
			'id' => '35',
			'role_id' => '5',
			'hero_id' => '4',
			'level' => '0',
			'created' => '2014-09-06 23:28:28',
			'modified' => '2014-09-06 23:28:28'
		),
		array(
			'id' => '36',
			'role_id' => '6',
			'hero_id' => '4',
			'level' => '1',
			'created' => '2014-09-06 23:28:38',
			'modified' => '2014-09-06 23:28:38'
		),
		array(
			'id' => '37',
			'role_id' => '7',
			'hero_id' => '4',
			'level' => '10',
			'created' => '2014-09-06 23:28:51',
			'modified' => '2014-09-06 23:28:51'
		),
		array(
			'id' => '38',
			'role_id' => '8',
			'hero_id' => '4',
			'level' => '0',
			'created' => '2014-09-06 23:29:05',
			'modified' => '2014-09-06 23:29:05'
		),
		array(
			'id' => '39',
			'role_id' => '9',
			'hero_id' => '4',
			'level' => '0',
			'created' => '2014-09-06 23:29:11',
			'modified' => '2014-09-06 23:29:11'
		),
		array(
			'id' => '40',
			'role_id' => '10',
			'hero_id' => '4',
			'level' => '5',
			'created' => '2014-09-06 23:29:28',
			'modified' => '2014-09-06 23:29:28'
		),
		array(
			'id' => '41',
			'role_id' => '11',
			'hero_id' => '4',
			'level' => '0',
			'created' => '2014-09-06 23:29:37',
			'modified' => '2014-09-06 23:29:37'
		),
		array(
			'id' => '42',
			'role_id' => '3',
			'hero_id' => '5',
			'level' => '1',
			'created' => '2014-09-06 23:29:48',
			'modified' => '2014-09-06 23:29:48'
		),
		array(
			'id' => '43',
			'role_id' => '2',
			'hero_id' => '5',
			'level' => '5',
			'created' => '2014-09-06 23:30:01',
			'modified' => '2014-09-06 23:30:01'
		),
		array(
			'id' => '44',
			'role_id' => '4',
			'hero_id' => '5',
			'level' => '10',
			'created' => '2014-09-06 23:31:04',
			'modified' => '2014-09-06 23:31:04'
		),
		array(
			'id' => '45',
			'role_id' => '5',
			'hero_id' => '5',
			'level' => '1',
			'created' => '2014-09-06 23:31:15',
			'modified' => '2014-09-06 23:31:15'
		),
		array(
			'id' => '46',
			'role_id' => '1',
			'hero_id' => '5',
			'level' => '0',
			'created' => '2014-09-06 23:31:46',
			'modified' => '2014-09-06 23:31:46'
		),
		array(
			'id' => '47',
			'role_id' => '7',
			'hero_id' => '5',
			'level' => '5',
			'created' => '2014-09-06 23:31:58',
			'modified' => '2014-09-06 23:31:58'
		),
		array(
			'id' => '48',
			'role_id' => '8',
			'hero_id' => '5',
			'level' => '0',
			'created' => '2014-09-06 23:32:07',
			'modified' => '2014-09-06 23:32:07'
		),
		array(
			'id' => '49',
			'role_id' => '9',
			'hero_id' => '5',
			'level' => '0',
			'created' => '2014-09-06 23:32:13',
			'modified' => '2014-09-06 23:32:13'
		),
		array(
			'id' => '50',
			'role_id' => '10',
			'hero_id' => '5',
			'level' => '0',
			'created' => '2014-09-06 23:32:21',
			'modified' => '2014-09-06 23:32:21'
		),
		array(
			'id' => '51',
			'role_id' => '11',
			'hero_id' => '5',
			'level' => '0',
			'created' => '2014-09-06 23:32:29',
			'modified' => '2014-09-06 23:32:29'
		),
		array(
			'id' => '52',
			'role_id' => '3',
			'hero_id' => '6',
			'level' => '1',
			'created' => '2014-09-06 23:33:41',
			'modified' => '2014-09-06 23:33:41'
		),
		array(
			'id' => '53',
			'role_id' => '2',
			'hero_id' => '6',
			'level' => '5',
			'created' => '2014-09-06 23:33:53',
			'modified' => '2014-09-06 23:33:53'
		),
		array(
			'id' => '54',
			'role_id' => '4',
			'hero_id' => '6',
			'level' => '5',
			'created' => '2014-09-06 23:34:01',
			'modified' => '2014-09-06 23:34:01'
		),
		array(
			'id' => '55',
			'role_id' => '5',
			'hero_id' => '6',
			'level' => '1',
			'created' => '2014-09-06 23:34:11',
			'modified' => '2014-09-06 23:34:11'
		),
		array(
			'id' => '56',
			'role_id' => '6',
			'hero_id' => '6',
			'level' => '5',
			'created' => '2014-09-06 23:34:23',
			'modified' => '2014-09-06 23:34:23'
		),
		array(
			'id' => '57',
			'role_id' => '7',
			'hero_id' => '6',
			'level' => '5',
			'created' => '2014-09-06 23:34:35',
			'modified' => '2014-09-06 23:34:35'
		),
		array(
			'id' => '58',
			'role_id' => '8',
			'hero_id' => '6',
			'level' => '0',
			'created' => '2014-09-06 23:34:45',
			'modified' => '2014-09-06 23:34:45'
		),
		array(
			'id' => '59',
			'role_id' => '9',
			'hero_id' => '6',
			'level' => '0',
			'created' => '2014-09-06 23:34:57',
			'modified' => '2014-09-06 23:34:57'
		),
		array(
			'id' => '60',
			'role_id' => '10',
			'hero_id' => '6',
			'level' => '5',
			'created' => '2014-09-06 23:35:07',
			'modified' => '2014-09-06 23:35:07'
		),
		array(
			'id' => '61',
			'role_id' => '11',
			'hero_id' => '6',
			'level' => '0',
			'created' => '2014-09-06 23:35:15',
			'modified' => '2014-09-06 23:35:15'
		),
		array(
			'id' => '62',
			'role_id' => '3',
			'hero_id' => '7',
			'level' => '5',
			'created' => '2014-09-07 08:10:34',
			'modified' => '2014-09-07 08:10:34'
		),
		array(
			'id' => '63',
			'role_id' => '2',
			'hero_id' => '7',
			'level' => '5',
			'created' => '2014-09-07 08:10:42',
			'modified' => '2014-09-07 08:10:42'
		),
		array(
			'id' => '64',
			'role_id' => '4',
			'hero_id' => '7',
			'level' => '1',
			'created' => '2014-09-07 08:10:52',
			'modified' => '2014-09-07 08:10:52'
		),
		array(
			'id' => '65',
			'role_id' => '5',
			'hero_id' => '7',
			'level' => '1',
			'created' => '2014-09-07 08:11:03',
			'modified' => '2014-09-07 08:11:03'
		),
		array(
			'id' => '66',
			'role_id' => '6',
			'hero_id' => '7',
			'level' => '5',
			'created' => '2014-09-07 08:11:21',
			'modified' => '2014-09-07 08:11:21'
		),
		array(
			'id' => '67',
			'role_id' => '7',
			'hero_id' => '7',
			'level' => '1',
			'created' => '2014-09-07 08:12:31',
			'modified' => '2014-09-07 08:12:31'
		),
		array(
			'id' => '68',
			'role_id' => '8',
			'hero_id' => '7',
			'level' => '1',
			'created' => '2014-09-07 08:12:48',
			'modified' => '2014-09-07 08:12:48'
		),
		array(
			'id' => '69',
			'role_id' => '9',
			'hero_id' => '7',
			'level' => '0',
			'created' => '2014-09-07 08:12:57',
			'modified' => '2014-09-07 08:12:57'
		),
		array(
			'id' => '70',
			'role_id' => '10',
			'hero_id' => '7',
			'level' => '1',
			'created' => '2014-09-07 08:13:04',
			'modified' => '2014-09-07 08:13:04'
		),
		array(
			'id' => '71',
			'role_id' => '11',
			'hero_id' => '7',
			'level' => '5',
			'created' => '2014-09-07 08:13:14',
			'modified' => '2014-09-07 08:13:14'
		),
		array(
			'id' => '72',
			'role_id' => '3',
			'hero_id' => '8',
			'level' => '0',
			'created' => '2014-09-07 08:13:36',
			'modified' => '2014-09-07 08:13:36'
		),
		array(
			'id' => '73',
			'role_id' => '2',
			'hero_id' => '8',
			'level' => '5',
			'created' => '2014-09-07 08:13:52',
			'modified' => '2014-09-07 08:13:52'
		),
		array(
			'id' => '74',
			'role_id' => '4',
			'hero_id' => '8',
			'level' => '10',
			'created' => '2014-09-07 08:14:05',
			'modified' => '2014-09-07 08:14:05'
		),
		array(
			'id' => '75',
			'role_id' => '5',
			'hero_id' => '8',
			'level' => '0',
			'created' => '2014-09-07 08:14:19',
			'modified' => '2014-09-07 08:14:19'
		),
		array(
			'id' => '76',
			'role_id' => '1',
			'hero_id' => '8',
			'level' => '5',
			'created' => '2014-09-07 08:14:42',
			'modified' => '2014-09-07 08:14:42'
		),
		array(
			'id' => '77',
			'role_id' => '7',
			'hero_id' => '8',
			'level' => '1',
			'created' => '2014-09-07 08:14:54',
			'modified' => '2014-09-07 08:14:54'
		),
		array(
			'id' => '78',
			'role_id' => '8',
			'hero_id' => '8',
			'level' => '0',
			'created' => '2014-09-07 08:15:02',
			'modified' => '2014-09-07 08:15:02'
		),
		array(
			'id' => '79',
			'role_id' => '9',
			'hero_id' => '8',
			'level' => '0',
			'created' => '2014-09-07 08:15:10',
			'modified' => '2014-09-07 08:15:10'
		),
		array(
			'id' => '80',
			'role_id' => '10',
			'hero_id' => '8',
			'level' => '10',
			'created' => '2014-09-07 08:15:23',
			'modified' => '2014-09-07 08:15:23'
		),
		array(
			'id' => '81',
			'role_id' => '11',
			'hero_id' => '8',
			'level' => '0',
			'created' => '2014-09-07 08:15:29',
			'modified' => '2014-09-07 08:15:29'
		),
		array(
			'id' => '82',
			'role_id' => '3',
			'hero_id' => '9',
			'level' => '10',
			'created' => '2014-09-07 08:16:03',
			'modified' => '2014-09-07 08:16:03'
		),
		array(
			'id' => '83',
			'role_id' => '2',
			'hero_id' => '9',
			'level' => '5',
			'created' => '2014-09-07 08:16:12',
			'modified' => '2014-09-07 08:16:12'
		),
		array(
			'id' => '84',
			'role_id' => '4',
			'hero_id' => '9',
			'level' => '5',
			'created' => '2014-09-07 08:16:19',
			'modified' => '2014-09-07 08:16:19'
		),
		array(
			'id' => '85',
			'role_id' => '5',
			'hero_id' => '9',
			'level' => '0',
			'created' => '2014-09-07 08:16:28',
			'modified' => '2014-09-07 08:16:28'
		),
		array(
			'id' => '86',
			'role_id' => '6',
			'hero_id' => '9',
			'level' => '1',
			'created' => '2014-09-07 08:16:39',
			'modified' => '2014-09-07 08:16:39'
		),
		array(
			'id' => '87',
			'role_id' => '7',
			'hero_id' => '9',
			'level' => '1',
			'created' => '2014-09-07 08:16:44',
			'modified' => '2014-09-07 08:16:44'
		),
		array(
			'id' => '88',
			'role_id' => '8',
			'hero_id' => '9',
			'level' => '1',
			'created' => '2014-09-07 08:16:50',
			'modified' => '2014-09-07 08:16:50'
		),
		array(
			'id' => '89',
			'role_id' => '9',
			'hero_id' => '9',
			'level' => '1',
			'created' => '2014-09-07 08:16:57',
			'modified' => '2014-09-07 08:16:57'
		),
		array(
			'id' => '90',
			'role_id' => '10',
			'hero_id' => '9',
			'level' => '0',
			'created' => '2014-09-07 08:17:07',
			'modified' => '2014-09-07 08:17:07'
		),
		array(
			'id' => '91',
			'role_id' => '11',
			'hero_id' => '9',
			'level' => '1',
			'created' => '2014-09-07 08:17:15',
			'modified' => '2014-09-07 08:17:15'
		),
		array(
			'id' => '92',
			'role_id' => '3',
			'hero_id' => '10',
			'level' => '0',
			'created' => '2014-09-07 08:17:28',
			'modified' => '2014-09-07 08:17:28'
		),
		array(
			'id' => '93',
			'role_id' => '2',
			'hero_id' => '10',
			'level' => '0',
			'created' => '2014-09-07 08:17:38',
			'modified' => '2014-09-07 08:17:38'
		),
		array(
			'id' => '94',
			'role_id' => '4',
			'hero_id' => '10',
			'level' => '5',
			'created' => '2014-09-07 08:17:48',
			'modified' => '2014-09-07 08:17:48'
		),
		array(
			'id' => '95',
			'role_id' => '5',
			'hero_id' => '10',
			'level' => '0',
			'created' => '2014-09-07 08:17:57',
			'modified' => '2014-09-07 08:17:57'
		),
		array(
			'id' => '96',
			'role_id' => '6',
			'hero_id' => '10',
			'level' => '0',
			'created' => '2014-09-07 08:18:07',
			'modified' => '2014-09-07 08:18:07'
		),
		array(
			'id' => '97',
			'role_id' => '7',
			'hero_id' => '10',
			'level' => '1',
			'created' => '2014-09-07 08:18:13',
			'modified' => '2014-09-07 08:18:13'
		),
		array(
			'id' => '98',
			'role_id' => '8',
			'hero_id' => '10',
			'level' => '10',
			'created' => '2014-09-07 08:18:23',
			'modified' => '2014-09-07 08:18:23'
		),
		array(
			'id' => '99',
			'role_id' => '9',
			'hero_id' => '10',
			'level' => '0',
			'created' => '2014-09-07 08:18:30',
			'modified' => '2014-09-07 08:18:30'
		),
		array(
			'id' => '100',
			'role_id' => '10',
			'hero_id' => '10',
			'level' => '0',
			'created' => '2014-09-07 08:18:37',
			'modified' => '2014-09-07 08:18:37'
		),
		array(
			'id' => '101',
			'role_id' => '11',
			'hero_id' => '10',
			'level' => '10',
			'created' => '2014-09-07 08:18:43',
			'modified' => '2014-09-07 08:18:53'
		),
		array(
			'id' => '102',
			'role_id' => '3',
			'hero_id' => '11',
			'level' => '1',
			'created' => '2014-09-07 08:19:04',
			'modified' => '2014-09-07 08:19:04'
		),
		array(
			'id' => '103',
			'role_id' => '2',
			'hero_id' => '11',
			'level' => '0',
			'created' => '2014-09-07 08:19:12',
			'modified' => '2014-09-07 08:19:12'
		),
		array(
			'id' => '104',
			'role_id' => '4',
			'hero_id' => '11',
			'level' => '10',
			'created' => '2014-09-07 08:19:12',
			'modified' => '2014-09-07 08:19:32'
		),
		array(
			'id' => '105',
			'role_id' => '5',
			'hero_id' => '11',
			'level' => '1',
			'created' => '2014-09-07 08:19:46',
			'modified' => '2014-09-07 08:19:46'
		),
		array(
			'id' => '106',
			'role_id' => '6',
			'hero_id' => '11',
			'level' => '0',
			'created' => '2014-09-07 08:19:55',
			'modified' => '2014-09-07 08:19:55'
		),
		array(
			'id' => '107',
			'role_id' => '7',
			'hero_id' => '11',
			'level' => '1',
			'created' => '2014-09-07 08:20:06',
			'modified' => '2014-09-07 08:20:06'
		),
		array(
			'id' => '108',
			'role_id' => '8',
			'hero_id' => '11',
			'level' => '0',
			'created' => '2014-09-07 08:20:18',
			'modified' => '2014-09-07 08:20:18'
		),
		array(
			'id' => '109',
			'role_id' => '8',
			'hero_id' => '11',
			'level' => '0',
			'created' => '2014-09-07 08:20:32',
			'modified' => '2014-09-07 08:20:32'
		),
		array(
			'id' => '110',
			'role_id' => '9',
			'hero_id' => '11',
			'level' => '0',
			'created' => '2014-09-07 08:20:40',
			'modified' => '2014-09-07 08:20:40'
		),
		array(
			'id' => '111',
			'role_id' => '10',
			'hero_id' => '11',
			'level' => '5',
			'created' => '2014-09-07 08:20:49',
			'modified' => '2014-09-07 08:20:49'
		),
		array(
			'id' => '112',
			'role_id' => '11',
			'hero_id' => '11',
			'level' => '1',
			'created' => '2014-09-07 08:20:56',
			'modified' => '2014-09-07 08:20:56'
		),
		array(
			'id' => '113',
			'role_id' => '3',
			'hero_id' => '12',
			'level' => '1',
			'created' => '2014-09-07 08:21:18',
			'modified' => '2014-09-07 08:21:18'
		),
		array(
			'id' => '114',
			'role_id' => '2',
			'hero_id' => '12',
			'level' => '1',
			'created' => '2014-09-07 08:21:25',
			'modified' => '2014-09-07 08:21:25'
		),
		array(
			'id' => '115',
			'role_id' => '4',
			'hero_id' => '12',
			'level' => '10',
			'created' => '2014-09-07 08:21:35',
			'modified' => '2014-09-07 08:21:35'
		),
		array(
			'id' => '116',
			'role_id' => '5',
			'hero_id' => '12',
			'level' => '0',
			'created' => '2014-09-07 08:21:46',
			'modified' => '2014-09-07 08:21:46'
		),
		array(
			'id' => '117',
			'role_id' => '6',
			'hero_id' => '12',
			'level' => '0',
			'created' => '2014-09-07 08:22:02',
			'modified' => '2014-09-07 08:22:02'
		),
		array(
			'id' => '118',
			'role_id' => '7',
			'hero_id' => '12',
			'level' => '1',
			'created' => '2014-09-07 08:22:17',
			'modified' => '2014-09-07 08:22:17'
		),
		array(
			'id' => '119',
			'role_id' => '8',
			'hero_id' => '12',
			'level' => '0',
			'created' => '2014-09-07 08:22:46',
			'modified' => '2014-09-07 08:22:46'
		),
		array(
			'id' => '120',
			'role_id' => '9',
			'hero_id' => '12',
			'level' => '0',
			'created' => '2014-09-07 08:22:53',
			'modified' => '2014-09-07 08:22:53'
		),
		array(
			'id' => '121',
			'role_id' => '10',
			'hero_id' => '12',
			'level' => '10',
			'created' => '2014-09-07 08:23:01',
			'modified' => '2014-09-07 08:23:01'
		),
		array(
			'id' => '122',
			'role_id' => '11',
			'hero_id' => '12',
			'level' => '1',
			'created' => '2014-09-07 08:23:08',
			'modified' => '2014-09-07 08:23:08'
		),
		array(
			'id' => '123',
			'role_id' => '3',
			'hero_id' => '13',
			'level' => '5',
			'created' => '2014-09-07 08:23:17',
			'modified' => '2014-09-07 08:23:17'
		),
		array(
			'id' => '124',
			'role_id' => '2',
			'hero_id' => '13',
			'level' => '5',
			'created' => '2014-09-07 08:23:26',
			'modified' => '2014-09-07 08:23:26'
		),
		array(
			'id' => '125',
			'role_id' => '4',
			'hero_id' => '13',
			'level' => '10',
			'created' => '2014-09-07 08:23:35',
			'modified' => '2014-09-07 08:23:35'
		),
		array(
			'id' => '126',
			'role_id' => '5',
			'hero_id' => '13',
			'level' => '0',
			'created' => '2014-09-07 08:23:55',
			'modified' => '2014-09-07 08:23:55'
		),
		array(
			'id' => '127',
			'role_id' => '6',
			'hero_id' => '13',
			'level' => '0',
			'created' => '2014-09-07 08:24:08',
			'modified' => '2014-09-07 08:24:08'
		),
		array(
			'id' => '128',
			'role_id' => '7',
			'hero_id' => '13',
			'level' => '1',
			'created' => '2014-09-07 08:24:23',
			'modified' => '2014-09-07 08:24:23'
		),
		array(
			'id' => '129',
			'role_id' => '8',
			'hero_id' => '13',
			'level' => '0',
			'created' => '2014-09-07 08:24:33',
			'modified' => '2014-09-07 08:24:33'
		),
		array(
			'id' => '130',
			'role_id' => '9',
			'hero_id' => '13',
			'level' => '1',
			'created' => '2014-09-07 08:25:14',
			'modified' => '2014-09-07 08:25:14'
		),
		array(
			'id' => '131',
			'role_id' => '10',
			'hero_id' => '13',
			'level' => '1',
			'created' => '2014-09-07 08:25:22',
			'modified' => '2014-09-07 08:25:22'
		),
		array(
			'id' => '132',
			'role_id' => '11',
			'hero_id' => '13',
			'level' => '0',
			'created' => '2014-09-07 08:25:34',
			'modified' => '2014-09-07 08:25:34'
		),
		array(
			'id' => '133',
			'role_id' => '3',
			'hero_id' => '14',
			'level' => '5',
			'created' => '2014-09-07 08:25:54',
			'modified' => '2014-09-07 08:25:54'
		),
		array(
			'id' => '134',
			'role_id' => '2',
			'hero_id' => '14',
			'level' => '5',
			'created' => '2014-09-07 08:26:12',
			'modified' => '2014-09-07 08:26:12'
		),
		array(
			'id' => '135',
			'role_id' => '4',
			'hero_id' => '14',
			'level' => '5',
			'created' => '2014-09-07 08:26:21',
			'modified' => '2014-09-07 08:26:21'
		),
		array(
			'id' => '136',
			'role_id' => '5',
			'hero_id' => '14',
			'level' => '0',
			'created' => '2014-09-07 08:26:39',
			'modified' => '2014-09-07 08:26:39'
		),
		array(
			'id' => '137',
			'role_id' => '6',
			'hero_id' => '14',
			'level' => '0',
			'created' => '2014-09-07 08:26:45',
			'modified' => '2014-09-07 08:26:45'
		),
		array(
			'id' => '138',
			'role_id' => '7',
			'hero_id' => '14',
			'level' => '0',
			'created' => '2014-09-07 08:26:51',
			'modified' => '2014-09-07 08:26:51'
		),
		array(
			'id' => '139',
			'role_id' => '8',
			'hero_id' => '14',
			'level' => '5',
			'created' => '2014-09-07 08:27:00',
			'modified' => '2014-09-07 08:27:00'
		),
		array(
			'id' => '140',
			'role_id' => '9',
			'hero_id' => '14',
			'level' => '1',
			'created' => '2014-09-07 08:27:08',
			'modified' => '2014-09-07 08:27:08'
		),
		array(
			'id' => '141',
			'role_id' => '10',
			'hero_id' => '14',
			'level' => '0',
			'created' => '2014-09-07 08:27:16',
			'modified' => '2014-09-07 08:27:16'
		),
		array(
			'id' => '142',
			'role_id' => '11',
			'hero_id' => '14',
			'level' => '10',
			'created' => '2014-09-07 08:27:22',
			'modified' => '2014-09-07 08:27:22'
		),
		array(
			'id' => '143',
			'role_id' => '3',
			'hero_id' => '15',
			'level' => '10',
			'created' => '2014-09-07 08:27:50',
			'modified' => '2014-09-07 08:27:50'
		),
		array(
			'id' => '144',
			'role_id' => '2',
			'hero_id' => '15',
			'level' => '1',
			'created' => '2014-09-07 08:28:06',
			'modified' => '2014-09-07 08:28:06'
		),
		array(
			'id' => '145',
			'role_id' => '4',
			'hero_id' => '15',
			'level' => '0',
			'created' => '2014-09-07 08:28:20',
			'modified' => '2014-09-07 08:28:20'
		),
		array(
			'id' => '146',
			'role_id' => '5',
			'hero_id' => '15',
			'level' => '0',
			'created' => '2014-09-07 08:28:30',
			'modified' => '2014-09-07 08:28:30'
		),
		array(
			'id' => '147',
			'role_id' => '5',
			'hero_id' => '15',
			'level' => '0',
			'created' => '2014-09-07 08:28:48',
			'modified' => '2014-09-07 08:28:48'
		),
		array(
			'id' => '148',
			'role_id' => '6',
			'hero_id' => '15',
			'level' => '5',
			'created' => '2014-09-07 08:28:57',
			'modified' => '2014-09-07 08:28:57'
		),
		array(
			'id' => '149',
			'role_id' => '7',
			'hero_id' => '15',
			'level' => '5',
			'created' => '2014-09-07 08:29:09',
			'modified' => '2014-09-07 08:29:09'
		),
		array(
			'id' => '150',
			'role_id' => '8',
			'hero_id' => '15',
			'level' => '5',
			'created' => '2014-09-07 08:29:16',
			'modified' => '2014-09-07 08:29:16'
		),
		array(
			'id' => '151',
			'role_id' => '9',
			'hero_id' => '15',
			'level' => '5',
			'created' => '2014-09-07 08:29:23',
			'modified' => '2014-09-07 08:29:23'
		),
		array(
			'id' => '152',
			'role_id' => '10',
			'hero_id' => '15',
			'level' => '0',
			'created' => '2014-09-07 08:29:29',
			'modified' => '2014-09-07 08:29:29'
		),
		array(
			'id' => '153',
			'role_id' => '11',
			'hero_id' => '15',
			'level' => '5',
			'created' => '2014-09-07 08:29:41',
			'modified' => '2014-09-07 08:29:41'
		),
		array(
			'id' => '154',
			'role_id' => '3',
			'hero_id' => '16',
			'level' => '1',
			'created' => '2014-09-07 08:29:58',
			'modified' => '2014-09-07 08:29:58'
		),
		array(
			'id' => '155',
			'role_id' => '2',
			'hero_id' => '16',
			'level' => '1',
			'created' => '2014-09-07 08:30:04',
			'modified' => '2014-09-07 08:30:04'
		),
		array(
			'id' => '156',
			'role_id' => '4',
			'hero_id' => '16',
			'level' => '5',
			'created' => '2014-09-07 08:30:16',
			'modified' => '2014-09-07 08:30:16'
		),
		array(
			'id' => '157',
			'role_id' => '5',
			'hero_id' => '16',
			'level' => '0',
			'created' => '2014-09-07 08:30:30',
			'modified' => '2014-09-07 08:30:30'
		),
		array(
			'id' => '158',
			'role_id' => '6',
			'hero_id' => '16',
			'level' => '0',
			'created' => '2014-09-07 08:30:38',
			'modified' => '2014-09-07 08:30:38'
		),
		array(
			'id' => '159',
			'role_id' => '7',
			'hero_id' => '16',
			'level' => '0',
			'created' => '2014-09-07 08:30:45',
			'modified' => '2014-09-07 08:30:45'
		),
		array(
			'id' => '160',
			'role_id' => '8',
			'hero_id' => '16',
			'level' => '1',
			'created' => '2014-09-07 08:30:55',
			'modified' => '2014-09-07 08:30:55'
		),
		array(
			'id' => '161',
			'role_id' => '9',
			'hero_id' => '16',
			'level' => '1',
			'created' => '2014-09-07 08:31:04',
			'modified' => '2014-09-07 08:31:04'
		),
		array(
			'id' => '162',
			'role_id' => '10',
			'hero_id' => '16',
			'level' => '5',
			'created' => '2014-09-07 08:31:10',
			'modified' => '2014-09-07 08:31:10'
		),
		array(
			'id' => '163',
			'role_id' => '11',
			'hero_id' => '16',
			'level' => '0',
			'created' => '2014-09-07 08:31:18',
			'modified' => '2014-09-07 08:31:18'
		),
		array(
			'id' => '164',
			'role_id' => '3',
			'hero_id' => '17',
			'level' => '5',
			'created' => '2014-09-07 08:31:49',
			'modified' => '2014-09-07 08:31:49'
		),
		array(
			'id' => '165',
			'role_id' => '2',
			'hero_id' => '17',
			'level' => '1',
			'created' => '2014-09-07 08:32:00',
			'modified' => '2014-09-07 08:32:00'
		),
		array(
			'id' => '166',
			'role_id' => '4',
			'hero_id' => '17',
			'level' => '0',
			'created' => '2014-09-07 08:32:07',
			'modified' => '2014-09-07 08:32:07'
		),
		array(
			'id' => '167',
			'role_id' => '5',
			'hero_id' => '17',
			'level' => '0',
			'created' => '2014-09-07 08:32:23',
			'modified' => '2014-09-07 08:32:23'
		),
		array(
			'id' => '168',
			'role_id' => '1',
			'hero_id' => '17',
			'level' => '0',
			'created' => '2014-09-07 08:32:47',
			'modified' => '2014-09-07 08:32:47'
		),
		array(
			'id' => '169',
			'role_id' => '7',
			'hero_id' => '17',
			'level' => '1',
			'created' => '2014-09-07 08:33:58',
			'modified' => '2014-09-07 08:33:58'
		),
		array(
			'id' => '170',
			'role_id' => '8',
			'hero_id' => '17',
			'level' => '10',
			'created' => '2014-09-07 08:34:20',
			'modified' => '2014-09-07 08:34:20'
		),
		array(
			'id' => '171',
			'role_id' => '9',
			'hero_id' => '17',
			'level' => '5',
			'created' => '2014-09-07 08:34:28',
			'modified' => '2014-09-07 08:34:28'
		),
		array(
			'id' => '172',
			'role_id' => '10',
			'hero_id' => '17',
			'level' => '0',
			'created' => '2014-09-07 08:34:39',
			'modified' => '2014-09-07 08:34:39'
		),
		array(
			'id' => '173',
			'role_id' => '11',
			'hero_id' => '17',
			'level' => '10',
			'created' => '2014-09-07 08:34:45',
			'modified' => '2014-09-07 08:34:45'
		),
		array(
			'id' => '174',
			'role_id' => '3',
			'hero_id' => '18',
			'level' => '10',
			'created' => '2014-09-07 08:35:24',
			'modified' => '2014-09-07 08:35:24'
		),
		array(
			'id' => '175',
			'role_id' => '2',
			'hero_id' => '18',
			'level' => '5',
			'created' => '2014-09-07 08:35:34',
			'modified' => '2014-09-07 08:35:34'
		),
		array(
			'id' => '176',
			'role_id' => '4',
			'hero_id' => '18',
			'level' => '5',
			'created' => '2014-09-07 08:35:43',
			'modified' => '2014-09-07 08:35:43'
		),
		array(
			'id' => '177',
			'role_id' => '5',
			'hero_id' => '18',
			'level' => '0',
			'created' => '2014-09-07 08:35:53',
			'modified' => '2014-09-07 08:35:53'
		),
		array(
			'id' => '178',
			'role_id' => '6',
			'hero_id' => '18',
			'level' => '0',
			'created' => '2014-09-07 08:36:00',
			'modified' => '2014-09-07 08:36:00'
		),
		array(
			'id' => '179',
			'role_id' => '7',
			'hero_id' => '18',
			'level' => '1',
			'created' => '2014-09-07 08:36:10',
			'modified' => '2014-09-07 08:36:10'
		),
		array(
			'id' => '180',
			'role_id' => '8',
			'hero_id' => '18',
			'level' => '5',
			'created' => '2014-09-07 08:36:18',
			'modified' => '2014-09-07 08:36:18'
		),
		array(
			'id' => '181',
			'role_id' => '9',
			'hero_id' => '18',
			'level' => '0',
			'created' => '2014-09-07 08:36:27',
			'modified' => '2014-09-07 08:36:27'
		),
		array(
			'id' => '182',
			'role_id' => '10',
			'hero_id' => '18',
			'level' => '0',
			'created' => '2014-09-07 08:36:36',
			'modified' => '2014-09-07 08:36:36'
		),
		array(
			'id' => '183',
			'role_id' => '11',
			'hero_id' => '18',
			'level' => '5',
			'created' => '2014-09-07 08:36:48',
			'modified' => '2014-09-07 08:36:48'
		),
		array(
			'id' => '184',
			'role_id' => '3',
			'hero_id' => '19',
			'level' => '5',
			'created' => '2014-09-07 08:37:12',
			'modified' => '2014-09-07 08:37:12'
		),
		array(
			'id' => '185',
			'role_id' => '2',
			'hero_id' => '19',
			'level' => '5',
			'created' => '2014-09-07 08:37:19',
			'modified' => '2014-09-07 08:37:19'
		),
		array(
			'id' => '186',
			'role_id' => '4',
			'hero_id' => '19',
			'level' => '5',
			'created' => '2014-09-07 08:37:26',
			'modified' => '2014-09-07 08:37:26'
		),
		array(
			'id' => '187',
			'role_id' => '5',
			'hero_id' => '19',
			'level' => '0',
			'created' => '2014-09-07 08:37:34',
			'modified' => '2014-09-07 08:37:34'
		),
		array(
			'id' => '188',
			'role_id' => '1',
			'hero_id' => '19',
			'level' => '1',
			'created' => '2014-09-07 08:37:43',
			'modified' => '2014-09-07 08:37:43'
		),
		array(
			'id' => '189',
			'role_id' => '7',
			'hero_id' => '19',
			'level' => '5',
			'created' => '2014-09-07 08:37:53',
			'modified' => '2014-09-07 08:37:53'
		),
		array(
			'id' => '190',
			'role_id' => '8',
			'hero_id' => '19',
			'level' => '1',
			'created' => '2014-09-07 08:38:01',
			'modified' => '2014-09-07 08:38:01'
		),
		array(
			'id' => '191',
			'role_id' => '9',
			'hero_id' => '19',
			'level' => '1',
			'created' => '2014-09-07 08:38:08',
			'modified' => '2014-09-07 08:38:08'
		),
		array(
			'id' => '192',
			'role_id' => '10',
			'hero_id' => '19',
			'level' => '0',
			'created' => '2014-09-07 08:38:15',
			'modified' => '2014-09-07 08:38:15'
		),
		array(
			'id' => '193',
			'role_id' => '11',
			'hero_id' => '19',
			'level' => '1',
			'created' => '2014-09-07 08:38:23',
			'modified' => '2014-09-07 08:38:23'
		),
		array(
			'id' => '194',
			'role_id' => '3',
			'hero_id' => '20',
			'level' => '0',
			'created' => '2014-09-07 08:38:50',
			'modified' => '2014-09-07 08:38:50'
		),
		array(
			'id' => '195',
			'role_id' => '2',
			'hero_id' => '20',
			'level' => '5',
			'created' => '2014-09-07 08:38:58',
			'modified' => '2014-09-07 08:38:58'
		),
		array(
			'id' => '196',
			'role_id' => '4',
			'hero_id' => '20',
			'level' => '10',
			'created' => '2014-09-07 08:39:06',
			'modified' => '2014-09-07 08:39:06'
		),
		array(
			'id' => '197',
			'role_id' => '6',
			'hero_id' => '20',
			'level' => '1',
			'created' => '2014-09-07 08:39:19',
			'modified' => '2014-09-07 08:39:19'
		),
		array(
			'id' => '198',
			'role_id' => '7',
			'hero_id' => '20',
			'level' => '1',
			'created' => '2014-09-07 08:39:26',
			'modified' => '2014-09-07 08:39:26'
		),
		array(
			'id' => '199',
			'role_id' => '8',
			'hero_id' => '20',
			'level' => '0',
			'created' => '2014-09-07 08:39:35',
			'modified' => '2014-09-07 08:39:35'
		),
		array(
			'id' => '200',
			'role_id' => '8',
			'hero_id' => '20',
			'level' => '0',
			'created' => '2014-09-07 08:39:45',
			'modified' => '2014-09-07 08:39:45'
		),
		array(
			'id' => '201',
			'role_id' => '9',
			'hero_id' => '20',
			'level' => '0',
			'created' => '2014-09-07 08:39:50',
			'modified' => '2014-09-07 08:39:50'
		),
		array(
			'id' => '202',
			'role_id' => '10',
			'hero_id' => '20',
			'level' => '10',
			'created' => '2014-09-07 08:39:57',
			'modified' => '2014-09-07 08:39:57'
		),
		array(
			'id' => '203',
			'role_id' => '11',
			'hero_id' => '20',
			'level' => '0',
			'created' => '2014-09-07 08:40:03',
			'modified' => '2014-09-07 08:40:03'
		),
		array(
			'id' => '204',
			'role_id' => '3',
			'hero_id' => '21',
			'level' => '1',
			'created' => '2014-09-07 08:40:16',
			'modified' => '2014-09-07 08:40:16'
		),
		array(
			'id' => '205',
			'role_id' => '2',
			'hero_id' => '21',
			'level' => '0',
			'created' => '2014-09-07 08:40:25',
			'modified' => '2014-09-07 08:40:25'
		),
		array(
			'id' => '206',
			'role_id' => '4',
			'hero_id' => '21',
			'level' => '10',
			'created' => '2014-09-07 08:40:32',
			'modified' => '2014-09-07 08:40:32'
		),
		array(
			'id' => '207',
			'role_id' => '5',
			'hero_id' => '21',
			'level' => '0',
			'created' => '2014-09-07 08:40:40',
			'modified' => '2014-09-07 08:40:40'
		),
		array(
			'id' => '208',
			'role_id' => '1',
			'hero_id' => '21',
			'level' => '1',
			'created' => '2014-09-07 08:40:46',
			'modified' => '2014-09-07 08:40:46'
		),
		array(
			'id' => '209',
			'role_id' => '7',
			'hero_id' => '21',
			'level' => '10',
			'created' => '2014-09-07 08:40:55',
			'modified' => '2014-09-07 08:40:55'
		),
		array(
			'id' => '210',
			'role_id' => '8',
			'hero_id' => '21',
			'level' => '0',
			'created' => '2014-09-07 08:41:07',
			'modified' => '2014-09-07 08:41:07'
		),
		array(
			'id' => '211',
			'role_id' => '9',
			'hero_id' => '21',
			'level' => '10',
			'created' => '2014-09-07 08:41:21',
			'modified' => '2014-09-07 08:41:21'
		),
		array(
			'id' => '212',
			'role_id' => '10',
			'hero_id' => '21',
			'level' => '1',
			'created' => '2014-09-07 08:41:38',
			'modified' => '2014-09-07 08:41:38'
		),
		array(
			'id' => '213',
			'role_id' => '11',
			'hero_id' => '21',
			'level' => '0',
			'created' => '2014-09-07 08:41:44',
			'modified' => '2014-09-07 08:41:44'
		),
		array(
			'id' => '214',
			'role_id' => '3',
			'hero_id' => '22',
			'level' => '1',
			'created' => '2014-09-07 08:42:03',
			'modified' => '2014-09-07 08:42:03'
		),
		array(
			'id' => '215',
			'role_id' => '2',
			'hero_id' => '22',
			'level' => '1',
			'created' => '2014-09-07 08:42:11',
			'modified' => '2014-09-07 08:42:11'
		),
		array(
			'id' => '216',
			'role_id' => '4',
			'hero_id' => '22',
			'level' => '10',
			'created' => '2014-09-07 08:42:20',
			'modified' => '2014-09-07 08:42:20'
		),
		array(
			'id' => '217',
			'role_id' => '5',
			'hero_id' => '22',
			'level' => '1',
			'created' => '2014-09-07 08:42:33',
			'modified' => '2014-09-07 08:42:33'
		),
		array(
			'id' => '218',
			'role_id' => '6',
			'hero_id' => '22',
			'level' => '0',
			'created' => '2014-09-07 08:42:50',
			'modified' => '2014-09-07 08:42:50'
		),
		array(
			'id' => '219',
			'role_id' => '7',
			'hero_id' => '22',
			'level' => '0',
			'created' => '2014-09-07 08:42:55',
			'modified' => '2014-09-07 08:42:55'
		),
		array(
			'id' => '220',
			'role_id' => '8',
			'hero_id' => '22',
			'level' => '0',
			'created' => '2014-09-07 08:43:02',
			'modified' => '2014-09-07 08:43:02'
		),
		array(
			'id' => '221',
			'role_id' => '9',
			'hero_id' => '22',
			'level' => '1',
			'created' => '2014-09-07 08:43:22',
			'modified' => '2014-09-07 08:43:22'
		),
		array(
			'id' => '222',
			'role_id' => '10',
			'hero_id' => '22',
			'level' => '10',
			'created' => '2014-09-07 08:43:31',
			'modified' => '2014-09-07 08:43:31'
		),
		array(
			'id' => '223',
			'role_id' => '11',
			'hero_id' => '22',
			'level' => '0',
			'created' => '2014-09-07 08:43:38',
			'modified' => '2014-09-07 08:43:38'
		),
		array(
			'id' => '224',
			'role_id' => '3',
			'hero_id' => '23',
			'level' => '1',
			'created' => '2014-09-07 08:44:27',
			'modified' => '2014-09-07 08:44:27'
		),
		array(
			'id' => '225',
			'role_id' => '2',
			'hero_id' => '23',
			'level' => '0',
			'created' => '2014-09-07 08:44:42',
			'modified' => '2014-09-07 08:44:42'
		),
		array(
			'id' => '226',
			'role_id' => '4',
			'hero_id' => '23',
			'level' => '10',
			'created' => '2014-09-07 08:46:48',
			'modified' => '2014-09-07 08:46:48'
		),
		array(
			'id' => '227',
			'role_id' => '5',
			'hero_id' => '23',
			'level' => '0',
			'created' => '2014-09-07 08:47:03',
			'modified' => '2014-09-07 08:47:03'
		),
		array(
			'id' => '228',
			'role_id' => '1',
			'hero_id' => '23',
			'level' => '1',
			'created' => '2014-09-07 08:47:12',
			'modified' => '2014-09-07 08:47:12'
		),
		array(
			'id' => '229',
			'role_id' => '7',
			'hero_id' => '23',
			'level' => '0',
			'created' => '2014-09-07 08:47:20',
			'modified' => '2014-09-07 08:47:20'
		),
		array(
			'id' => '230',
			'role_id' => '8',
			'hero_id' => '23',
			'level' => '0',
			'created' => '2014-09-07 08:47:33',
			'modified' => '2014-09-07 08:47:33'
		),
		array(
			'id' => '231',
			'role_id' => '9',
			'hero_id' => '23',
			'level' => '1',
			'created' => '2014-09-07 08:47:43',
			'modified' => '2014-09-07 08:47:43'
		),
		array(
			'id' => '232',
			'role_id' => '10',
			'hero_id' => '23',
			'level' => '5',
			'created' => '2014-09-07 08:47:51',
			'modified' => '2014-09-07 08:47:51'
		),
		array(
			'id' => '233',
			'role_id' => '11',
			'hero_id' => '23',
			'level' => '1',
			'created' => '2014-09-07 08:47:59',
			'modified' => '2014-09-07 08:47:59'
		),
		array(
			'id' => '234',
			'role_id' => '3',
			'hero_id' => '24',
			'level' => '5',
			'created' => '2014-09-07 08:48:07',
			'modified' => '2014-09-07 08:48:07'
		),
		array(
			'id' => '235',
			'role_id' => '2',
			'hero_id' => '23',
			'level' => '1',
			'created' => '2014-09-07 08:48:16',
			'modified' => '2014-09-07 08:48:16'
		),
		array(
			'id' => '236',
			'role_id' => '4',
			'hero_id' => '24',
			'level' => '1',
			'created' => '2014-09-07 08:48:22',
			'modified' => '2014-09-07 08:48:22'
		),
		array(
			'id' => '237',
			'role_id' => '5',
			'hero_id' => '24',
			'level' => '0',
			'created' => '2014-09-07 08:48:35',
			'modified' => '2014-09-07 08:48:35'
		),
		array(
			'id' => '238',
			'role_id' => '1',
			'hero_id' => '24',
			'level' => '0',
			'created' => '2014-09-07 08:48:43',
			'modified' => '2014-09-07 08:48:43'
		),
		array(
			'id' => '239',
			'role_id' => '7',
			'hero_id' => '24',
			'level' => '5',
			'created' => '2014-09-07 08:48:51',
			'modified' => '2014-09-07 08:48:51'
		),
		array(
			'id' => '240',
			'role_id' => '8',
			'hero_id' => '24',
			'level' => '0',
			'created' => '2014-09-07 08:49:00',
			'modified' => '2014-09-07 08:49:00'
		),
		array(
			'id' => '241',
			'role_id' => '9',
			'hero_id' => '24',
			'level' => '0',
			'created' => '2014-09-07 08:49:11',
			'modified' => '2014-09-07 08:49:11'
		),
		array(
			'id' => '242',
			'role_id' => '10',
			'hero_id' => '24',
			'level' => '1',
			'created' => '2014-09-07 08:49:19',
			'modified' => '2014-09-07 08:49:19'
		),
		array(
			'id' => '243',
			'role_id' => '11',
			'hero_id' => '24',
			'level' => '0',
			'created' => '2014-09-07 08:49:27',
			'modified' => '2014-09-07 08:49:27'
		),
		array(
			'id' => '244',
			'role_id' => '3',
			'hero_id' => '25',
			'level' => '10',
			'created' => '2014-09-07 08:50:41',
			'modified' => '2014-09-07 08:50:41'
		),
		array(
			'id' => '245',
			'role_id' => '2',
			'hero_id' => '25',
			'level' => '5',
			'created' => '2014-09-07 08:51:01',
			'modified' => '2014-09-07 08:51:01'
		),
		array(
			'id' => '246',
			'role_id' => '4',
			'hero_id' => '25',
			'level' => '5',
			'created' => '2014-09-07 08:51:09',
			'modified' => '2014-09-07 08:51:09'
		),
		array(
			'id' => '247',
			'role_id' => '5',
			'hero_id' => '25',
			'level' => '0',
			'created' => '2014-09-07 08:51:17',
			'modified' => '2014-09-07 08:51:17'
		),
		array(
			'id' => '248',
			'role_id' => '1',
			'hero_id' => '25',
			'level' => '0',
			'created' => '2014-09-07 08:51:26',
			'modified' => '2014-09-07 08:51:26'
		),
		array(
			'id' => '249',
			'role_id' => '7',
			'hero_id' => '25',
			'level' => '1',
			'created' => '2014-09-07 08:51:37',
			'modified' => '2014-09-07 08:51:37'
		),
		array(
			'id' => '250',
			'role_id' => '8',
			'hero_id' => '25',
			'level' => '0',
			'created' => '2014-09-07 08:51:55',
			'modified' => '2014-09-07 08:51:55'
		),
		array(
			'id' => '251',
			'role_id' => '9',
			'hero_id' => '25',
			'level' => '0',
			'created' => '2014-09-07 08:52:04',
			'modified' => '2014-09-07 08:52:04'
		),
		array(
			'id' => '252',
			'role_id' => '10',
			'hero_id' => '25',
			'level' => '1',
			'created' => '2014-09-07 08:52:16',
			'modified' => '2014-09-07 08:52:16'
		),
		array(
			'id' => '253',
			'role_id' => '11',
			'hero_id' => '25',
			'level' => '5',
			'created' => '2014-09-07 08:52:25',
			'modified' => '2014-09-07 08:52:25'
		),
		array(
			'id' => '254',
			'role_id' => '3',
			'hero_id' => '26',
			'level' => '5',
			'created' => '2014-09-07 08:52:49',
			'modified' => '2014-09-07 08:52:49'
		),
		array(
			'id' => '255',
			'role_id' => '2',
			'hero_id' => '26',
			'level' => '1',
			'created' => '2014-09-07 08:53:01',
			'modified' => '2014-09-07 08:53:01'
		),
		array(
			'id' => '256',
			'role_id' => '4',
			'hero_id' => '26',
			'level' => '5',
			'created' => '2014-09-07 08:53:13',
			'modified' => '2014-09-07 08:53:13'
		),
		array(
			'id' => '257',
			'role_id' => '5',
			'hero_id' => '26',
			'level' => '0',
			'created' => '2014-09-07 08:53:26',
			'modified' => '2014-09-07 08:53:26'
		),
		array(
			'id' => '258',
			'role_id' => '1',
			'hero_id' => '26',
			'level' => '1',
			'created' => '2014-09-07 08:53:36',
			'modified' => '2014-09-07 08:53:36'
		),
		array(
			'id' => '259',
			'role_id' => '7',
			'hero_id' => '26',
			'level' => '1',
			'created' => '2014-09-07 08:53:48',
			'modified' => '2014-09-07 08:53:48'
		),
		array(
			'id' => '260',
			'role_id' => '8',
			'hero_id' => '26',
			'level' => '0',
			'created' => '2014-09-07 08:54:16',
			'modified' => '2014-09-07 08:54:16'
		),
		array(
			'id' => '261',
			'role_id' => '9',
			'hero_id' => '26',
			'level' => '1',
			'created' => '2014-09-07 08:54:25',
			'modified' => '2014-09-07 08:54:25'
		),
		array(
			'id' => '262',
			'role_id' => '10',
			'hero_id' => '26',
			'level' => '1',
			'created' => '2014-09-07 08:54:33',
			'modified' => '2014-09-07 08:54:33'
		),
		array(
			'id' => '263',
			'role_id' => '11',
			'hero_id' => '26',
			'level' => '0',
			'created' => '2014-09-07 08:54:39',
			'modified' => '2014-09-07 08:54:39'
		),
		array(
			'id' => '264',
			'role_id' => '3',
			'hero_id' => '27',
			'level' => '10',
			'created' => '2014-09-07 08:54:52',
			'modified' => '2014-09-07 08:54:52'
		),
		array(
			'id' => '265',
			'role_id' => '2',
			'hero_id' => '27',
			'level' => '1',
			'created' => '2014-09-07 08:55:13',
			'modified' => '2014-09-07 08:55:13'
		),
		array(
			'id' => '266',
			'role_id' => '4',
			'hero_id' => '27',
			'level' => '5',
			'created' => '2014-09-07 08:55:26',
			'modified' => '2014-09-07 08:55:26'
		),
		array(
			'id' => '267',
			'role_id' => '5',
			'hero_id' => '27',
			'level' => '10',
			'created' => '2014-09-07 08:55:44',
			'modified' => '2014-09-07 08:55:44'
		),
		array(
			'id' => '268',
			'role_id' => '1',
			'hero_id' => '27',
			'level' => '0',
			'created' => '2014-09-07 08:55:52',
			'modified' => '2014-09-07 08:55:52'
		),
		array(
			'id' => '269',
			'role_id' => '7',
			'hero_id' => '27',
			'level' => '1',
			'created' => '2014-09-07 08:55:59',
			'modified' => '2014-09-07 08:55:59'
		),
		array(
			'id' => '270',
			'role_id' => '8',
			'hero_id' => '27',
			'level' => '0',
			'created' => '2014-09-07 08:56:19',
			'modified' => '2014-09-07 08:56:19'
		),
		array(
			'id' => '271',
			'role_id' => '9',
			'hero_id' => '27',
			'level' => '1',
			'created' => '2014-09-07 08:56:28',
			'modified' => '2014-09-07 08:56:28'
		),
		array(
			'id' => '272',
			'role_id' => '10',
			'hero_id' => '27',
			'level' => '5',
			'created' => '2014-09-07 08:56:37',
			'modified' => '2014-09-07 08:56:37'
		),
		array(
			'id' => '273',
			'role_id' => '11',
			'hero_id' => '27',
			'level' => '1',
			'created' => '2014-09-07 08:56:52',
			'modified' => '2014-09-07 08:56:52'
		),
		array(
			'id' => '274',
			'role_id' => '3',
			'hero_id' => '28',
			'level' => '0',
			'created' => '2014-09-07 08:57:05',
			'modified' => '2014-09-07 08:57:05'
		),
		array(
			'id' => '275',
			'role_id' => '2',
			'hero_id' => '28',
			'level' => '5',
			'created' => '2014-09-07 08:57:15',
			'modified' => '2014-09-07 08:57:15'
		),
		array(
			'id' => '276',
			'role_id' => '4',
			'hero_id' => '28',
			'level' => '5',
			'created' => '2014-09-07 08:57:32',
			'modified' => '2014-09-07 08:57:32'
		),
		array(
			'id' => '277',
			'role_id' => '5',
			'hero_id' => '28',
			'level' => '5',
			'created' => '2014-09-07 08:57:41',
			'modified' => '2014-09-07 08:57:41'
		),
		array(
			'id' => '278',
			'role_id' => '6',
			'hero_id' => '28',
			'level' => '1',
			'created' => '2014-09-07 08:57:56',
			'modified' => '2014-09-07 08:57:56'
		),
		array(
			'id' => '279',
			'role_id' => '7',
			'hero_id' => '28',
			'level' => '5',
			'created' => '2014-09-07 08:58:04',
			'modified' => '2014-09-07 08:58:04'
		),
		array(
			'id' => '280',
			'role_id' => '8',
			'hero_id' => '28',
			'level' => '0',
			'created' => '2014-09-07 08:58:12',
			'modified' => '2014-09-07 08:58:12'
		),
		array(
			'id' => '281',
			'role_id' => '9',
			'hero_id' => '28',
			'level' => '1',
			'created' => '2014-09-07 08:58:20',
			'modified' => '2014-09-07 08:58:20'
		),
		array(
			'id' => '282',
			'role_id' => '10',
			'hero_id' => '28',
			'level' => '5',
			'created' => '2014-09-07 08:58:26',
			'modified' => '2014-09-07 08:58:26'
		),
		array(
			'id' => '283',
			'role_id' => '11',
			'hero_id' => '28',
			'level' => '0',
			'created' => '2014-09-07 08:58:34',
			'modified' => '2014-09-07 08:58:34'
		),
		array(
			'id' => '284',
			'role_id' => '3',
			'hero_id' => '29',
			'level' => '5',
			'created' => '2014-09-07 08:58:46',
			'modified' => '2014-09-07 08:58:46'
		),
		array(
			'id' => '285',
			'role_id' => '2',
			'hero_id' => '29',
			'level' => '1',
			'created' => '2014-09-07 08:58:53',
			'modified' => '2014-09-07 08:58:53'
		),
		array(
			'id' => '286',
			'role_id' => '4',
			'hero_id' => '29',
			'level' => '5',
			'created' => '2014-09-07 08:59:04',
			'modified' => '2014-09-07 08:59:04'
		),
		array(
			'id' => '287',
			'role_id' => '5',
			'hero_id' => '29',
			'level' => '0',
			'created' => '2014-09-07 08:59:14',
			'modified' => '2014-09-07 08:59:14'
		),
		array(
			'id' => '288',
			'role_id' => '1',
			'hero_id' => '29',
			'level' => '0',
			'created' => '2014-09-07 08:59:22',
			'modified' => '2014-09-07 08:59:22'
		),
		array(
			'id' => '289',
			'role_id' => '7',
			'hero_id' => '29',
			'level' => '1',
			'created' => '2014-09-07 08:59:30',
			'modified' => '2014-09-07 08:59:30'
		),
		array(
			'id' => '290',
			'role_id' => '8',
			'hero_id' => '29',
			'level' => '1',
			'created' => '2014-09-07 08:59:40',
			'modified' => '2014-09-07 08:59:40'
		),
		array(
			'id' => '291',
			'role_id' => '9',
			'hero_id' => '29',
			'level' => '10',
			'created' => '2014-09-07 08:59:47',
			'modified' => '2014-09-07 08:59:47'
		),
		array(
			'id' => '292',
			'role_id' => '10',
			'hero_id' => '29',
			'level' => '0',
			'created' => '2014-09-07 08:59:58',
			'modified' => '2014-09-07 08:59:58'
		),
		array(
			'id' => '293',
			'role_id' => '11',
			'hero_id' => '29',
			'level' => '5',
			'created' => '2014-09-07 09:00:06',
			'modified' => '2014-09-07 09:00:06'
		),
		array(
			'id' => '294',
			'role_id' => '3',
			'hero_id' => '30',
			'level' => '5',
			'created' => '2014-09-07 09:01:02',
			'modified' => '2014-09-07 09:01:02'
		),
		array(
			'id' => '295',
			'role_id' => '2',
			'hero_id' => '30',
			'level' => '1',
			'created' => '2014-09-07 09:01:13',
			'modified' => '2014-09-07 09:01:13'
		),
		array(
			'id' => '296',
			'role_id' => '4',
			'hero_id' => '30',
			'level' => '5',
			'created' => '2014-09-07 09:01:23',
			'modified' => '2014-09-07 09:01:23'
		),
		array(
			'id' => '297',
			'role_id' => '5',
			'hero_id' => '30',
			'level' => '0',
			'created' => '2014-09-07 09:01:33',
			'modified' => '2014-09-07 09:01:43'
		),
		array(
			'id' => '298',
			'role_id' => '1',
			'hero_id' => '30',
			'level' => '0',
			'created' => '2014-09-07 09:01:52',
			'modified' => '2014-09-07 09:01:52'
		),
		array(
			'id' => '299',
			'role_id' => '7',
			'hero_id' => '30',
			'level' => '1',
			'created' => '2014-09-07 09:02:05',
			'modified' => '2014-09-07 09:02:05'
		),
		array(
			'id' => '300',
			'role_id' => '8',
			'hero_id' => '30',
			'level' => '0',
			'created' => '2014-09-07 09:02:15',
			'modified' => '2014-09-07 09:02:15'
		),
		array(
			'id' => '301',
			'role_id' => '9',
			'hero_id' => '30',
			'level' => '5',
			'created' => '2014-09-07 09:02:27',
			'modified' => '2014-09-07 09:02:27'
		),
		array(
			'id' => '302',
			'role_id' => '10',
			'hero_id' => '30',
			'level' => '1',
			'created' => '2014-09-07 09:02:35',
			'modified' => '2014-09-07 09:02:35'
		),
		array(
			'id' => '303',
			'role_id' => '11',
			'hero_id' => '30',
			'level' => '1',
			'created' => '2014-09-07 09:02:43',
			'modified' => '2014-09-07 09:02:43'
		),
		array(
			'id' => '304',
			'role_id' => '3',
			'hero_id' => '31',
			'level' => '1',
			'created' => '2014-09-07 09:03:00',
			'modified' => '2014-09-07 09:03:00'
		),
		array(
			'id' => '305',
			'role_id' => '2',
			'hero_id' => '31',
			'level' => '1',
			'created' => '2014-09-07 09:03:07',
			'modified' => '2014-09-07 09:03:07'
		),
		array(
			'id' => '306',
			'role_id' => '4',
			'hero_id' => '31',
			'level' => '5',
			'created' => '2014-09-07 09:03:21',
			'modified' => '2014-09-07 09:03:21'
		),
		array(
			'id' => '307',
			'role_id' => '5',
			'hero_id' => '31',
			'level' => '0',
			'created' => '2014-09-07 09:03:30',
			'modified' => '2014-09-07 09:03:30'
		),
		array(
			'id' => '308',
			'role_id' => '1',
			'hero_id' => '31',
			'level' => '0',
			'created' => '2014-09-07 09:03:42',
			'modified' => '2014-09-07 09:03:42'
		),
		array(
			'id' => '309',
			'role_id' => '7',
			'hero_id' => '31',
			'level' => '5',
			'created' => '2014-09-07 09:04:03',
			'modified' => '2014-09-07 09:04:03'
		),
		array(
			'id' => '310',
			'role_id' => '8',
			'hero_id' => '31',
			'level' => '5',
			'created' => '2014-09-07 09:04:12',
			'modified' => '2014-09-07 09:04:12'
		),
		array(
			'id' => '311',
			'role_id' => '9',
			'hero_id' => '31',
			'level' => '10',
			'created' => '2014-09-07 09:04:21',
			'modified' => '2014-09-07 09:04:21'
		),
		array(
			'id' => '312',
			'role_id' => '10',
			'hero_id' => '31',
			'level' => '0',
			'created' => '2014-09-07 09:04:31',
			'modified' => '2014-09-07 09:04:31'
		),
		array(
			'id' => '313',
			'role_id' => '11',
			'hero_id' => '31',
			'level' => '5',
			'created' => '2014-09-07 09:04:39',
			'modified' => '2014-09-07 09:04:39'
		),
		array(
			'id' => '314',
			'role_id' => '3',
			'hero_id' => '32',
			'level' => '0',
			'created' => '2014-09-07 09:05:00',
			'modified' => '2014-09-07 09:05:00'
		),
		array(
			'id' => '315',
			'role_id' => '2',
			'hero_id' => '32',
			'level' => '0',
			'created' => '2014-09-07 09:05:14',
			'modified' => '2014-09-07 09:05:14'
		),
		array(
			'id' => '316',
			'role_id' => '4',
			'hero_id' => '32',
			'level' => '5',
			'created' => '2014-09-07 09:05:27',
			'modified' => '2014-09-07 09:05:27'
		),
		array(
			'id' => '317',
			'role_id' => '5',
			'hero_id' => '32',
			'level' => '5',
			'created' => '2014-09-07 09:05:39',
			'modified' => '2014-09-07 09:05:39'
		),
		array(
			'id' => '318',
			'role_id' => '6',
			'hero_id' => '32',
			'level' => '10',
			'created' => '2014-09-07 09:05:53',
			'modified' => '2014-09-07 09:05:53'
		),
		array(
			'id' => '319',
			'role_id' => '7',
			'hero_id' => '32',
			'level' => '0',
			'created' => '2014-09-07 09:06:08',
			'modified' => '2014-09-07 09:06:08'
		),
		array(
			'id' => '320',
			'role_id' => '8',
			'hero_id' => '32',
			'level' => '0',
			'created' => '2014-09-07 09:06:20',
			'modified' => '2014-09-07 09:06:20'
		),
		array(
			'id' => '321',
			'role_id' => '9',
			'hero_id' => '32',
			'level' => '1',
			'created' => '2014-09-07 09:06:27',
			'modified' => '2014-09-07 09:06:27'
		),
		array(
			'id' => '322',
			'role_id' => '10',
			'hero_id' => '32',
			'level' => '5',
			'created' => '2014-09-07 09:06:36',
			'modified' => '2014-09-07 09:06:36'
		),
		array(
			'id' => '323',
			'role_id' => '11',
			'hero_id' => '32',
			'level' => '1',
			'created' => '2014-09-07 09:06:46',
			'modified' => '2014-09-07 09:06:46'
		),
		array(
			'id' => '324',
			'role_id' => '3',
			'hero_id' => '34',
			'level' => '0',
			'created' => '2014-09-07 09:07:30',
			'modified' => '2014-09-07 09:07:30'
		),
		array(
			'id' => '325',
			'role_id' => '2',
			'hero_id' => '34',
			'level' => '5',
			'created' => '2014-09-07 09:07:38',
			'modified' => '2014-09-07 09:07:38'
		),
		array(
			'id' => '326',
			'role_id' => '4',
			'hero_id' => '34',
			'level' => '1',
			'created' => '2014-09-07 09:07:48',
			'modified' => '2014-09-07 09:07:48'
		),
		array(
			'id' => '327',
			'role_id' => '5',
			'hero_id' => '34',
			'level' => '0',
			'created' => '2014-09-07 09:07:57',
			'modified' => '2014-09-07 09:07:57'
		),
		array(
			'id' => '328',
			'role_id' => '1',
			'hero_id' => '34',
			'level' => '1',
			'created' => '2014-09-07 09:08:54',
			'modified' => '2014-09-07 09:08:54'
		),
		array(
			'id' => '329',
			'role_id' => '7',
			'hero_id' => '34',
			'level' => '1',
			'created' => '2014-09-07 09:09:03',
			'modified' => '2014-09-07 09:09:03'
		),
		array(
			'id' => '330',
			'role_id' => '8',
			'hero_id' => '34',
			'level' => '0',
			'created' => '2014-09-07 09:09:14',
			'modified' => '2014-09-07 09:09:14'
		),
		array(
			'id' => '331',
			'role_id' => '9',
			'hero_id' => '34',
			'level' => '0',
			'created' => '2014-09-07 09:09:21',
			'modified' => '2014-09-07 09:09:21'
		),
		array(
			'id' => '332',
			'role_id' => '10',
			'hero_id' => '34',
			'level' => '10',
			'created' => '2014-09-07 09:09:28',
			'modified' => '2014-09-07 09:09:28'
		),
		array(
			'id' => '333',
			'role_id' => '11',
			'hero_id' => '34',
			'level' => '0',
			'created' => '2014-09-07 09:09:35',
			'modified' => '2014-09-07 09:09:35'
		),
		array(
			'id' => '334',
			'role_id' => '3',
			'hero_id' => '36',
			'level' => '5',
			'created' => '2014-09-07 09:09:55',
			'modified' => '2014-09-07 09:09:55'
		),
		array(
			'id' => '335',
			'role_id' => '2',
			'hero_id' => '36',
			'level' => '0',
			'created' => '2014-09-07 09:10:03',
			'modified' => '2014-09-07 09:10:03'
		),
		array(
			'id' => '336',
			'role_id' => '4',
			'hero_id' => '36',
			'level' => '10',
			'created' => '2014-09-07 09:10:16',
			'modified' => '2014-09-07 09:10:16'
		),
		array(
			'id' => '337',
			'role_id' => '5',
			'hero_id' => '36',
			'level' => '0',
			'created' => '2014-09-07 09:10:27',
			'modified' => '2014-09-07 09:10:27'
		),
		array(
			'id' => '338',
			'role_id' => '1',
			'hero_id' => '36',
			'level' => '1',
			'created' => '2014-09-07 09:10:36',
			'modified' => '2014-09-07 09:10:36'
		),
		array(
			'id' => '339',
			'role_id' => '7',
			'hero_id' => '36',
			'level' => '5',
			'created' => '2014-09-07 09:10:47',
			'modified' => '2014-09-07 09:10:47'
		),
		array(
			'id' => '340',
			'role_id' => '8',
			'hero_id' => '36',
			'level' => '10',
			'created' => '2014-09-07 09:11:12',
			'modified' => '2014-09-07 09:11:12'
		),
		array(
			'id' => '341',
			'role_id' => '9',
			'hero_id' => '36',
			'level' => '0',
			'created' => '2014-09-07 09:11:21',
			'modified' => '2014-09-07 09:11:21'
		),
		array(
			'id' => '342',
			'role_id' => '10',
			'hero_id' => '36',
			'level' => '0',
			'created' => '2014-09-07 09:11:28',
			'modified' => '2014-09-07 09:11:28'
		),
		array(
			'id' => '343',
			'role_id' => '11',
			'hero_id' => '36',
			'level' => '1',
			'created' => '2014-09-07 09:11:38',
			'modified' => '2014-09-07 09:11:38'
		),
		array(
			'id' => '344',
			'role_id' => '3',
			'hero_id' => '38',
			'level' => '10',
			'created' => '2014-09-07 09:11:48',
			'modified' => '2014-09-07 09:11:48'
		),
		array(
			'id' => '345',
			'role_id' => '2',
			'hero_id' => '38',
			'level' => '10',
			'created' => '2014-09-07 09:11:55',
			'modified' => '2014-09-07 09:11:55'
		),
		array(
			'id' => '346',
			'role_id' => '4',
			'hero_id' => '38',
			'level' => '1',
			'created' => '2014-09-07 09:12:02',
			'modified' => '2014-09-07 09:12:02'
		),
		array(
			'id' => '347',
			'role_id' => '5',
			'hero_id' => '38',
			'level' => '0',
			'created' => '2014-09-07 09:12:12',
			'modified' => '2014-09-07 09:12:12'
		),
		array(
			'id' => '348',
			'role_id' => '1',
			'hero_id' => '38',
			'level' => '1',
			'created' => '2014-09-07 09:12:21',
			'modified' => '2014-09-07 09:12:21'
		),
		array(
			'id' => '349',
			'role_id' => '7',
			'hero_id' => '38',
			'level' => '1',
			'created' => '2014-09-07 09:12:28',
			'modified' => '2014-09-07 09:12:28'
		),
		array(
			'id' => '350',
			'role_id' => '8',
			'hero_id' => '38',
			'level' => '0',
			'created' => '2014-09-07 09:12:35',
			'modified' => '2014-09-07 09:12:35'
		),
		array(
			'id' => '351',
			'role_id' => '9',
			'hero_id' => '38',
			'level' => '1',
			'created' => '2014-09-07 09:12:41',
			'modified' => '2014-09-07 09:12:41'
		),
		array(
			'id' => '352',
			'role_id' => '10',
			'hero_id' => '38',
			'level' => '1',
			'created' => '2014-09-07 09:12:47',
			'modified' => '2014-09-07 09:12:47'
		),
		array(
			'id' => '353',
			'role_id' => '11',
			'hero_id' => '38',
			'level' => '1',
			'created' => '2014-09-07 09:12:51',
			'modified' => '2014-09-07 09:12:51'
		),
		array(
			'id' => '354',
			'role_id' => '3',
			'hero_id' => '40',
			'level' => '0',
			'created' => '2014-09-07 09:13:14',
			'modified' => '2014-09-07 09:13:14'
		),
		array(
			'id' => '355',
			'role_id' => '2',
			'hero_id' => '40',
			'level' => '0',
			'created' => '2014-09-07 09:13:22',
			'modified' => '2014-09-07 09:13:22'
		),
		array(
			'id' => '356',
			'role_id' => '4',
			'hero_id' => '40',
			'level' => '10',
			'created' => '2014-09-07 09:13:29',
			'modified' => '2014-09-07 09:13:29'
		),
		array(
			'id' => '357',
			'role_id' => '5',
			'hero_id' => '40',
			'level' => '0',
			'created' => '2014-09-07 09:13:37',
			'modified' => '2014-09-07 09:13:37'
		),
		array(
			'id' => '358',
			'role_id' => '1',
			'hero_id' => '40',
			'level' => '1',
			'created' => '2014-09-07 09:13:52',
			'modified' => '2014-09-07 09:13:52'
		),
		array(
			'id' => '359',
			'role_id' => '7',
			'hero_id' => '40',
			'level' => '1',
			'created' => '2014-09-07 09:13:58',
			'modified' => '2014-09-07 09:13:58'
		),
		array(
			'id' => '360',
			'role_id' => '8',
			'hero_id' => '40',
			'level' => '5',
			'created' => '2014-09-07 09:14:06',
			'modified' => '2014-09-07 09:14:06'
		),
		array(
			'id' => '361',
			'role_id' => '9',
			'hero_id' => '40',
			'level' => '1',
			'created' => '2014-09-07 09:14:13',
			'modified' => '2014-09-07 09:14:13'
		),
		array(
			'id' => '362',
			'role_id' => '10',
			'hero_id' => '40',
			'level' => '1',
			'created' => '2014-09-07 09:14:20',
			'modified' => '2014-09-07 09:14:20'
		),
		array(
			'id' => '363',
			'role_id' => '11',
			'hero_id' => '40',
			'level' => '5',
			'created' => '2014-09-07 09:14:28',
			'modified' => '2014-09-07 09:14:28'
		),
		array(
			'id' => '364',
			'role_id' => '3',
			'hero_id' => '33',
			'level' => '0',
			'created' => '2014-09-08 20:31:21',
			'modified' => '2014-09-08 20:31:21'
		),
		array(
			'id' => '365',
			'role_id' => '2',
			'hero_id' => '33',
			'level' => '0',
			'created' => '2014-09-08 20:31:29',
			'modified' => '2014-09-08 20:32:51'
		),
		array(
			'id' => '366',
			'role_id' => '1',
			'hero_id' => '33',
			'level' => '5',
			'created' => '2014-09-08 20:32:13',
			'modified' => '2014-09-08 20:32:13'
		),
		array(
			'id' => '367',
			'role_id' => '4',
			'hero_id' => '33',
			'level' => '1',
			'created' => '2014-09-08 20:33:43',
			'modified' => '2014-09-08 20:33:43'
		),
		array(
			'id' => '368',
			'role_id' => '5',
			'hero_id' => '33',
			'level' => '0',
			'created' => '2014-09-08 20:34:06',
			'modified' => '2014-09-08 20:34:06'
		),
		array(
			'id' => '369',
			'role_id' => '7',
			'hero_id' => '33',
			'level' => '1',
			'created' => '2014-09-08 20:34:29',
			'modified' => '2014-09-08 20:34:29'
		),
		array(
			'id' => '370',
			'role_id' => '8',
			'hero_id' => '33',
			'level' => '0',
			'created' => '2014-09-08 20:34:48',
			'modified' => '2014-09-08 20:34:48'
		),
		array(
			'id' => '371',
			'role_id' => '9',
			'hero_id' => '33',
			'level' => '10',
			'created' => '2014-09-08 20:34:57',
			'modified' => '2014-09-08 20:34:57'
		),
		array(
			'id' => '372',
			'role_id' => '10',
			'hero_id' => '33',
			'level' => '10',
			'created' => '2014-09-08 20:35:08',
			'modified' => '2014-09-08 20:35:08'
		),
		array(
			'id' => '373',
			'role_id' => '11',
			'hero_id' => '33',
			'level' => '0',
			'created' => '2014-09-08 20:35:17',
			'modified' => '2014-09-08 20:35:17'
		),
		array(
			'id' => '374',
			'role_id' => '3',
			'hero_id' => '35',
			'level' => '0',
			'created' => '2014-09-08 20:36:24',
			'modified' => '2014-09-08 20:36:24'
		),
		array(
			'id' => '375',
			'role_id' => '2',
			'hero_id' => '35',
			'level' => '1',
			'created' => '2014-09-08 20:36:37',
			'modified' => '2014-09-08 20:36:37'
		),
		array(
			'id' => '376',
			'role_id' => '1',
			'hero_id' => '35',
			'level' => '5',
			'created' => '2014-09-08 20:37:50',
			'modified' => '2014-09-08 20:37:50'
		),
		array(
			'id' => '377',
			'role_id' => '4',
			'hero_id' => '35',
			'level' => '0',
			'created' => '2014-09-08 20:37:59',
			'modified' => '2014-09-08 20:37:59'
		),
		array(
			'id' => '378',
			'role_id' => '5',
			'hero_id' => '35',
			'level' => '0',
			'created' => '2014-09-08 20:38:03',
			'modified' => '2014-09-08 20:38:03'
		),
		array(
			'id' => '379',
			'role_id' => '7',
			'hero_id' => '35',
			'level' => '0',
			'created' => '2014-09-08 20:38:10',
			'modified' => '2014-09-08 20:38:10'
		),
		array(
			'id' => '380',
			'role_id' => '8',
			'hero_id' => '35',
			'level' => '0',
			'created' => '2014-09-08 20:38:14',
			'modified' => '2014-09-08 20:38:14'
		),
		array(
			'id' => '381',
			'role_id' => '9',
			'hero_id' => '35',
			'level' => '0',
			'created' => '2014-09-08 20:38:17',
			'modified' => '2014-09-08 20:38:17'
		),
		array(
			'id' => '382',
			'role_id' => '10',
			'hero_id' => '35',
			'level' => '10',
			'created' => '2014-09-08 20:38:22',
			'modified' => '2014-09-08 20:38:22'
		),
		array(
			'id' => '383',
			'role_id' => '11',
			'hero_id' => '35',
			'level' => '1',
			'created' => '2014-09-08 20:38:27',
			'modified' => '2014-09-08 20:38:27'
		),
		array(
			'id' => '384',
			'role_id' => '3',
			'hero_id' => '37',
			'level' => '1',
			'created' => '2014-09-08 20:38:37',
			'modified' => '2014-09-08 20:38:37'
		),
		array(
			'id' => '385',
			'role_id' => '2',
			'hero_id' => '37',
			'level' => '0',
			'created' => '2014-09-08 20:39:20',
			'modified' => '2014-09-08 20:39:20'
		),
		array(
			'id' => '386',
			'role_id' => '1',
			'hero_id' => '37',
			'level' => '5',
			'created' => '2014-09-08 20:39:33',
			'modified' => '2014-09-08 20:39:33'
		),
		array(
			'id' => '387',
			'role_id' => '4',
			'hero_id' => '37',
			'level' => '1',
			'created' => '2014-09-08 20:39:39',
			'modified' => '2014-09-08 20:39:39'
		),
		array(
			'id' => '388',
			'role_id' => '5',
			'hero_id' => '37',
			'level' => '0',
			'created' => '2014-09-08 20:39:45',
			'modified' => '2014-09-08 20:39:45'
		),
		array(
			'id' => '389',
			'role_id' => '7',
			'hero_id' => '37',
			'level' => '1',
			'created' => '2014-09-08 20:39:53',
			'modified' => '2014-09-08 20:39:53'
		),
		array(
			'id' => '390',
			'role_id' => '8',
			'hero_id' => '37',
			'level' => '1',
			'created' => '2014-09-08 20:39:58',
			'modified' => '2014-09-08 20:39:58'
		),
		array(
			'id' => '391',
			'role_id' => '9',
			'hero_id' => '37',
			'level' => '1',
			'created' => '2014-09-08 20:40:02',
			'modified' => '2014-09-08 20:40:02'
		),
		array(
			'id' => '392',
			'role_id' => '10',
			'hero_id' => '37',
			'level' => '5',
			'created' => '2014-09-08 20:40:25',
			'modified' => '2014-09-08 20:40:25'
		),
		array(
			'id' => '393',
			'role_id' => '11',
			'hero_id' => '37',
			'level' => '0',
			'created' => '2014-09-08 20:40:30',
			'modified' => '2014-09-08 20:40:30'
		),
		array(
			'id' => '394',
			'role_id' => '3',
			'hero_id' => '39',
			'level' => '1',
			'created' => '2014-09-08 20:40:38',
			'modified' => '2014-09-08 20:40:38'
		),
		array(
			'id' => '395',
			'role_id' => '2',
			'hero_id' => '39',
			'level' => '1',
			'created' => '2014-09-08 20:40:43',
			'modified' => '2014-09-08 20:40:43'
		),
		array(
			'id' => '396',
			'role_id' => '1',
			'hero_id' => '39',
			'level' => '1',
			'created' => '2014-09-08 20:40:49',
			'modified' => '2014-09-08 20:40:49'
		),
		array(
			'id' => '397',
			'role_id' => '1',
			'hero_id' => '39',
			'level' => '0',
			'created' => '2014-09-08 20:41:08',
			'modified' => '2014-09-08 20:41:08'
		),
		array(
			'id' => '398',
			'role_id' => '5',
			'hero_id' => '39',
			'level' => '0',
			'created' => '2014-09-08 20:41:14',
			'modified' => '2014-09-08 20:41:14'
		),
		array(
			'id' => '399',
			'role_id' => '7',
			'hero_id' => '39',
			'level' => '1',
			'created' => '2014-09-08 20:41:20',
			'modified' => '2014-09-08 20:41:20'
		),
		array(
			'id' => '400',
			'role_id' => '8',
			'hero_id' => '39',
			'level' => '0',
			'created' => '2014-09-08 20:41:29',
			'modified' => '2014-09-08 20:41:29'
		),
		array(
			'id' => '401',
			'role_id' => '9',
			'hero_id' => '39',
			'level' => '5',
			'created' => '2014-09-08 20:41:36',
			'modified' => '2014-09-08 20:41:36'
		),
		array(
			'id' => '402',
			'role_id' => '10',
			'hero_id' => '39',
			'level' => '5',
			'created' => '2014-09-08 20:41:40',
			'modified' => '2014-09-08 20:41:40'
		),
		array(
			'id' => '403',
			'role_id' => '11',
			'hero_id' => '39',
			'level' => '1',
			'created' => '2014-09-08 20:41:46',
			'modified' => '2014-09-08 20:41:46'
		),
		array(
			'id' => '404',
			'role_id' => '3',
			'hero_id' => '41',
			'level' => '0',
			'created' => '2014-09-08 20:43:08',
			'modified' => '2014-09-08 20:43:08'
		),
		array(
			'id' => '405',
			'role_id' => '2',
			'hero_id' => '41',
			'level' => '1',
			'created' => '2014-09-08 20:43:12',
			'modified' => '2014-09-08 20:43:12'
		),
		array(
			'id' => '406',
			'role_id' => '1',
			'hero_id' => '41',
			'level' => '5',
			'created' => '2014-09-08 20:43:18',
			'modified' => '2014-09-08 20:43:18'
		),
		array(
			'id' => '407',
			'role_id' => '4',
			'hero_id' => '41',
			'level' => '5',
			'created' => '2014-09-08 20:43:23',
			'modified' => '2014-09-08 20:43:23'
		),
		array(
			'id' => '408',
			'role_id' => '5',
			'hero_id' => '41',
			'level' => '0',
			'created' => '2014-09-08 20:43:28',
			'modified' => '2014-09-08 20:43:28'
		),
		array(
			'id' => '409',
			'role_id' => '7',
			'hero_id' => '41',
			'level' => '1',
			'created' => '2014-09-08 20:43:32',
			'modified' => '2014-09-08 20:43:32'
		),
		array(
			'id' => '410',
			'role_id' => '8',
			'hero_id' => '41',
			'level' => '0',
			'created' => '2014-09-08 20:43:38',
			'modified' => '2014-09-08 20:43:38'
		),
		array(
			'id' => '411',
			'role_id' => '9',
			'hero_id' => '41',
			'level' => '10',
			'created' => '2014-09-08 20:43:43',
			'modified' => '2014-09-08 20:43:43'
		),
		array(
			'id' => '412',
			'role_id' => '10',
			'hero_id' => '41',
			'level' => '10',
			'created' => '2014-09-08 20:43:45',
			'modified' => '2014-09-08 20:43:45'
		),
		array(
			'id' => '413',
			'role_id' => '11',
			'hero_id' => '41',
			'level' => '0',
			'created' => '2014-09-08 20:43:49',
			'modified' => '2014-09-08 20:43:49'
		),
		array(
			'id' => '414',
			'role_id' => '3',
			'hero_id' => '42',
			'level' => '0',
			'created' => '2014-09-08 20:44:17',
			'modified' => '2014-09-08 20:44:17'
		),
		array(
			'id' => '415',
			'role_id' => '2',
			'hero_id' => '42',
			'level' => '0',
			'created' => '2014-09-08 20:44:21',
			'modified' => '2014-09-08 20:44:21'
		),
		array(
			'id' => '416',
			'role_id' => '1',
			'hero_id' => '42',
			'level' => '10',
			'created' => '2014-09-08 20:44:27',
			'modified' => '2014-09-08 20:44:27'
		),
		array(
			'id' => '417',
			'role_id' => '4',
			'hero_id' => '42',
			'level' => '1',
			'created' => '2014-09-08 20:44:33',
			'modified' => '2014-09-08 20:44:33'
		),
		array(
			'id' => '418',
			'role_id' => '5',
			'hero_id' => '42',
			'level' => '0',
			'created' => '2014-09-08 20:44:40',
			'modified' => '2014-09-08 20:44:40'
		),
		array(
			'id' => '419',
			'role_id' => '7',
			'hero_id' => '42',
			'level' => '1',
			'created' => '2014-09-08 20:44:45',
			'modified' => '2014-09-08 20:44:45'
		),
		array(
			'id' => '420',
			'role_id' => '8',
			'hero_id' => '42',
			'level' => '0',
			'created' => '2014-09-08 20:44:50',
			'modified' => '2014-09-08 20:44:50'
		),
		array(
			'id' => '421',
			'role_id' => '9',
			'hero_id' => '42',
			'level' => '5',
			'created' => '2014-09-08 20:44:55',
			'modified' => '2014-09-08 20:44:55'
		),
		array(
			'id' => '422',
			'role_id' => '10',
			'hero_id' => '42',
			'level' => '10',
			'created' => '2014-09-08 20:45:02',
			'modified' => '2014-09-08 20:45:02'
		),
		array(
			'id' => '423',
			'role_id' => '11',
			'hero_id' => '42',
			'level' => '0',
			'created' => '2014-09-08 20:45:09',
			'modified' => '2014-09-08 20:45:09'
		),
		array(
			'id' => '424',
			'role_id' => '3',
			'hero_id' => '44',
			'level' => '5',
			'created' => '2014-09-08 20:45:37',
			'modified' => '2014-09-08 20:45:37'
		),
		array(
			'id' => '425',
			'role_id' => '2',
			'hero_id' => '44',
			'level' => '5',
			'created' => '2014-09-08 20:45:40',
			'modified' => '2014-09-08 20:45:40'
		),
		array(
			'id' => '426',
			'role_id' => '1',
			'hero_id' => '44',
			'level' => '0',
			'created' => '2014-09-08 20:45:45',
			'modified' => '2014-09-08 20:45:45'
		),
		array(
			'id' => '427',
			'role_id' => '4',
			'hero_id' => '44',
			'level' => '0',
			'created' => '2014-09-08 20:45:50',
			'modified' => '2014-09-08 20:45:50'
		),
		array(
			'id' => '428',
			'role_id' => '5',
			'hero_id' => '44',
			'level' => '0',
			'created' => '2014-09-08 20:45:53',
			'modified' => '2014-09-08 20:45:53'
		),
		array(
			'id' => '429',
			'role_id' => '7',
			'hero_id' => '44',
			'level' => '1',
			'created' => '2014-09-08 20:45:58',
			'modified' => '2014-09-08 20:45:58'
		),
		array(
			'id' => '430',
			'role_id' => '8',
			'hero_id' => '44',
			'level' => '5',
			'created' => '2014-09-08 20:46:03',
			'modified' => '2014-09-08 20:46:03'
		),
		array(
			'id' => '431',
			'role_id' => '9',
			'hero_id' => '44',
			'level' => '1',
			'created' => '2014-09-08 20:46:08',
			'modified' => '2014-09-08 20:46:08'
		),
		array(
			'id' => '432',
			'role_id' => '10',
			'hero_id' => '44',
			'level' => '1',
			'created' => '2014-09-08 20:46:12',
			'modified' => '2014-09-08 20:46:12'
		),
		array(
			'id' => '433',
			'role_id' => '11',
			'hero_id' => '44',
			'level' => '5',
			'created' => '2014-09-08 20:46:17',
			'modified' => '2014-09-08 20:46:17'
		),
		array(
			'id' => '434',
			'role_id' => '3',
			'hero_id' => '46',
			'level' => '1',
			'created' => '2014-09-08 20:46:43',
			'modified' => '2014-09-08 20:46:43'
		),
		array(
			'id' => '435',
			'role_id' => '2',
			'hero_id' => '46',
			'level' => '1',
			'created' => '2014-09-08 20:46:52',
			'modified' => '2014-09-08 20:46:52'
		),
		array(
			'id' => '436',
			'role_id' => '1',
			'hero_id' => '46',
			'level' => '0',
			'created' => '2014-09-08 20:46:57',
			'modified' => '2014-09-08 20:46:57'
		),
		array(
			'id' => '437',
			'role_id' => '4',
			'hero_id' => '46',
			'level' => '0',
			'created' => '2014-09-08 20:47:00',
			'modified' => '2014-09-08 20:47:00'
		),
		array(
			'id' => '438',
			'role_id' => '5',
			'hero_id' => '46',
			'level' => '0',
			'created' => '2014-09-08 20:47:04',
			'modified' => '2014-09-08 20:47:04'
		),
		array(
			'id' => '439',
			'role_id' => '7',
			'hero_id' => '46',
			'level' => '0',
			'created' => '2014-09-08 20:47:09',
			'modified' => '2014-09-08 20:47:09'
		),
		array(
			'id' => '440',
			'role_id' => '8',
			'hero_id' => '46',
			'level' => '0',
			'created' => '2014-09-08 20:47:14',
			'modified' => '2014-09-08 20:47:14'
		),
		array(
			'id' => '441',
			'role_id' => '9',
			'hero_id' => '46',
			'level' => '5',
			'created' => '2014-09-08 20:47:19',
			'modified' => '2014-09-08 20:47:19'
		),
		array(
			'id' => '442',
			'role_id' => '10',
			'hero_id' => '46',
			'level' => '10',
			'created' => '2014-09-08 20:47:24',
			'modified' => '2014-09-08 20:47:24'
		),
		array(
			'id' => '443',
			'role_id' => '11',
			'hero_id' => '46',
			'level' => '0',
			'created' => '2014-09-08 20:47:26',
			'modified' => '2014-09-08 20:47:40'
		),
		array(
			'id' => '444',
			'role_id' => '3',
			'hero_id' => '47',
			'level' => '0',
			'created' => '2014-09-08 20:48:00',
			'modified' => '2014-09-08 20:48:00'
		),
		array(
			'id' => '445',
			'role_id' => '2',
			'hero_id' => '47',
			'level' => '1',
			'created' => '2014-09-08 20:48:05',
			'modified' => '2014-09-08 20:48:05'
		),
		array(
			'id' => '446',
			'role_id' => '6',
			'hero_id' => '47',
			'level' => '5',
			'created' => '2014-09-08 20:48:12',
			'modified' => '2014-09-08 20:48:12'
		),
		array(
			'id' => '447',
			'role_id' => '4',
			'hero_id' => '47',
			'level' => '0',
			'created' => '2014-09-08 20:48:20',
			'modified' => '2014-09-08 20:48:19'
		),
		array(
			'id' => '448',
			'role_id' => '5',
			'hero_id' => '47',
			'level' => '0',
			'created' => '2014-09-08 20:48:25',
			'modified' => '2014-09-08 20:48:25'
		),
		array(
			'id' => '449',
			'role_id' => '7',
			'hero_id' => '47',
			'level' => '1',
			'created' => '2014-09-08 20:48:32',
			'modified' => '2014-09-08 20:48:32'
		),
		array(
			'id' => '450',
			'role_id' => '8',
			'hero_id' => '47',
			'level' => '0',
			'created' => '2014-09-08 20:48:36',
			'modified' => '2014-09-08 20:48:36'
		),
		array(
			'id' => '451',
			'role_id' => '9',
			'hero_id' => '47',
			'level' => '0',
			'created' => '2014-09-08 20:48:40',
			'modified' => '2014-09-08 20:48:40'
		),
		array(
			'id' => '452',
			'role_id' => '10',
			'hero_id' => '47',
			'level' => '5',
			'created' => '2014-09-08 20:48:45',
			'modified' => '2014-09-08 20:48:45'
		),
		array(
			'id' => '453',
			'role_id' => '11',
			'hero_id' => '47',
			'level' => '0',
			'created' => '2014-09-08 20:48:49',
			'modified' => '2014-09-08 20:48:49'
		),
		array(
			'id' => '454',
			'role_id' => '3',
			'hero_id' => '48',
			'level' => '1',
			'created' => '2014-09-08 20:49:08',
			'modified' => '2014-09-08 20:49:08'
		),
		array(
			'id' => '455',
			'role_id' => '2',
			'hero_id' => '48',
			'level' => '0',
			'created' => '2014-09-08 20:49:14',
			'modified' => '2014-09-08 20:49:14'
		),
		array(
			'id' => '456',
			'role_id' => '6',
			'hero_id' => '48',
			'level' => '1',
			'created' => '2014-09-08 20:49:20',
			'modified' => '2014-09-08 20:49:20'
		),
		array(
			'id' => '457',
			'role_id' => '4',
			'hero_id' => '48',
			'level' => '1',
			'created' => '2014-09-08 20:49:22',
			'modified' => '2014-09-08 20:49:22'
		),
		array(
			'id' => '458',
			'role_id' => '5',
			'hero_id' => '48',
			'level' => '0',
			'created' => '2014-09-08 20:49:28',
			'modified' => '2014-09-08 20:49:28'
		),
		array(
			'id' => '459',
			'role_id' => '7',
			'hero_id' => '48',
			'level' => '1',
			'created' => '2014-09-08 20:49:34',
			'modified' => '2014-09-08 20:49:34'
		),
		array(
			'id' => '460',
			'role_id' => '8',
			'hero_id' => '48',
			'level' => '0',
			'created' => '2014-09-08 20:49:38',
			'modified' => '2014-09-08 20:49:38'
		),
		array(
			'id' => '461',
			'role_id' => '9',
			'hero_id' => '48',
			'level' => '1',
			'created' => '2014-09-08 20:49:42',
			'modified' => '2014-09-08 20:49:42'
		),
		array(
			'id' => '462',
			'role_id' => '10',
			'hero_id' => '48',
			'level' => '5',
			'created' => '2014-09-08 20:49:46',
			'modified' => '2014-09-08 20:49:46'
		),
		array(
			'id' => '463',
			'role_id' => '11',
			'hero_id' => '48',
			'level' => '0',
			'created' => '2014-09-08 20:49:51',
			'modified' => '2014-09-08 20:49:51'
		),
		array(
			'id' => '464',
			'role_id' => '3',
			'hero_id' => '50',
			'level' => '1',
			'created' => '2014-09-08 20:50:51',
			'modified' => '2014-09-08 20:50:51'
		),
		array(
			'id' => '465',
			'role_id' => '2',
			'hero_id' => '50',
			'level' => '1',
			'created' => '2014-09-08 20:52:25',
			'modified' => '2014-09-08 20:52:25'
		),
		array(
			'id' => '466',
			'role_id' => '1',
			'hero_id' => '50',
			'level' => '10',
			'created' => '2014-09-08 20:52:32',
			'modified' => '2014-09-08 20:52:32'
		),
		array(
			'id' => '467',
			'role_id' => '4',
			'hero_id' => '50',
			'level' => '0',
			'created' => '2014-09-08 20:53:22',
			'modified' => '2014-09-08 20:53:22'
		),
		array(
			'id' => '468',
			'role_id' => '5',
			'hero_id' => '50',
			'level' => '0',
			'created' => '2014-09-08 20:53:30',
			'modified' => '2014-09-08 20:53:30'
		),
		array(
			'id' => '469',
			'role_id' => '7',
			'hero_id' => '50',
			'level' => '5',
			'created' => '2014-09-08 20:53:34',
			'modified' => '2014-09-08 20:53:34'
		),
		array(
			'id' => '470',
			'role_id' => '8',
			'hero_id' => '50',
			'level' => '1',
			'created' => '2014-09-08 20:53:39',
			'modified' => '2014-09-08 20:53:39'
		),
		array(
			'id' => '471',
			'role_id' => '9',
			'hero_id' => '50',
			'level' => '0',
			'created' => '2014-09-08 20:53:43',
			'modified' => '2014-09-08 20:53:43'
		),
		array(
			'id' => '472',
			'role_id' => '10',
			'hero_id' => '50',
			'level' => '10',
			'created' => '2014-09-08 20:53:49',
			'modified' => '2014-09-08 20:53:49'
		),
		array(
			'id' => '473',
			'role_id' => '11',
			'hero_id' => '50',
			'level' => '0',
			'created' => '2014-09-08 20:53:54',
			'modified' => '2014-09-08 20:53:54'
		),
		array(
			'id' => '474',
			'role_id' => '3',
			'hero_id' => '51',
			'level' => '0',
			'created' => '2014-09-08 20:54:27',
			'modified' => '2014-09-08 20:54:27'
		),
		array(
			'id' => '475',
			'role_id' => '2',
			'hero_id' => '51',
			'level' => '0',
			'created' => '2014-09-08 20:54:31',
			'modified' => '2014-09-08 20:54:31'
		),
		array(
			'id' => '476',
			'role_id' => '6',
			'hero_id' => '51',
			'level' => '0',
			'created' => '2014-09-08 20:54:37',
			'modified' => '2014-09-08 20:54:37'
		),
		array(
			'id' => '477',
			'role_id' => '5',
			'hero_id' => '51',
			'level' => '0',
			'created' => '2014-09-08 20:54:41',
			'modified' => '2014-09-08 20:54:41'
		),
		array(
			'id' => '478',
			'role_id' => '7',
			'hero_id' => '51',
			'level' => '5',
			'created' => '2014-09-08 20:54:47',
			'modified' => '2014-09-08 20:54:47'
		),
		array(
			'id' => '479',
			'role_id' => '8',
			'hero_id' => '51',
			'level' => '0',
			'created' => '2014-09-08 20:54:52',
			'modified' => '2014-09-08 20:54:52'
		),
		array(
			'id' => '480',
			'role_id' => '9',
			'hero_id' => '51',
			'level' => '5',
			'created' => '2014-09-08 20:54:59',
			'modified' => '2014-09-08 20:54:59'
		),
		array(
			'id' => '481',
			'role_id' => '10',
			'hero_id' => '51',
			'level' => '1',
			'created' => '2014-09-08 20:55:03',
			'modified' => '2014-09-08 20:55:03'
		),
		array(
			'id' => '482',
			'role_id' => '11',
			'hero_id' => '51',
			'level' => '1',
			'created' => '2014-09-08 20:55:08',
			'modified' => '2014-09-08 20:55:08'
		),
		array(
			'id' => '483',
			'role_id' => '3',
			'hero_id' => '52',
			'level' => '1',
			'created' => '2014-09-08 20:55:33',
			'modified' => '2014-09-08 20:55:33'
		),
		array(
			'id' => '484',
			'role_id' => '2',
			'hero_id' => '52',
			'level' => '0',
			'created' => '2014-09-08 20:55:37',
			'modified' => '2014-09-08 20:55:37'
		),
		array(
			'id' => '485',
			'role_id' => '1',
			'hero_id' => '52',
			'level' => '0',
			'created' => '2014-09-08 20:55:43',
			'modified' => '2014-09-08 20:55:43'
		),
		array(
			'id' => '486',
			'role_id' => '4',
			'hero_id' => '52',
			'level' => '5',
			'created' => '2014-09-08 20:55:51',
			'modified' => '2014-09-08 20:55:51'
		),
		array(
			'id' => '487',
			'role_id' => '4',
			'hero_id' => '51',
			'level' => '0',
			'created' => '2014-09-08 20:56:37',
			'modified' => '2014-09-08 20:56:37'
		),
		array(
			'id' => '488',
			'role_id' => '5',
			'hero_id' => '52',
			'level' => '1',
			'created' => '2014-09-08 20:56:53',
			'modified' => '2014-09-08 20:56:53'
		),
		array(
			'id' => '489',
			'role_id' => '7',
			'hero_id' => '52',
			'level' => '1',
			'created' => '2014-09-08 20:56:58',
			'modified' => '2014-09-08 20:56:58'
		),
		array(
			'id' => '490',
			'role_id' => '8',
			'hero_id' => '52',
			'level' => '0',
			'created' => '2014-09-08 20:57:07',
			'modified' => '2014-09-08 20:57:07'
		),
		array(
			'id' => '491',
			'role_id' => '9',
			'hero_id' => '52',
			'level' => '0',
			'created' => '2014-09-08 20:57:11',
			'modified' => '2014-09-08 20:57:11'
		),
		array(
			'id' => '492',
			'role_id' => '10',
			'hero_id' => '52',
			'level' => '10',
			'created' => '2014-09-08 20:57:16',
			'modified' => '2014-09-08 20:57:16'
		),
		array(
			'id' => '493',
			'role_id' => '11',
			'hero_id' => '52',
			'level' => '0',
			'created' => '2014-09-08 20:57:22',
			'modified' => '2014-09-08 20:57:22'
		),
		array(
			'id' => '494',
			'role_id' => '3',
			'hero_id' => '53',
			'level' => '1',
			'created' => '2014-09-08 20:57:53',
			'modified' => '2014-09-08 20:57:53'
		),
		array(
			'id' => '495',
			'role_id' => '2',
			'hero_id' => '53',
			'level' => '1',
			'created' => '2014-09-08 20:57:56',
			'modified' => '2014-09-08 20:57:56'
		),
		array(
			'id' => '496',
			'role_id' => '6',
			'hero_id' => '53',
			'level' => '10',
			'created' => '2014-09-08 20:58:01',
			'modified' => '2014-09-08 20:58:01'
		),
		array(
			'id' => '497',
			'role_id' => '4',
			'hero_id' => '53',
			'level' => '0',
			'created' => '2014-09-08 20:58:14',
			'modified' => '2014-09-08 20:58:14'
		),
		array(
			'id' => '498',
			'role_id' => '5',
			'hero_id' => '53',
			'level' => '0',
			'created' => '2014-09-08 20:58:21',
			'modified' => '2014-09-08 20:58:21'
		),
		array(
			'id' => '499',
			'role_id' => '7',
			'hero_id' => '53',
			'level' => '5',
			'created' => '2014-09-08 20:58:26',
			'modified' => '2014-09-08 20:58:26'
		),
		array(
			'id' => '500',
			'role_id' => '8',
			'hero_id' => '53',
			'level' => '0',
			'created' => '2014-09-08 20:58:34',
			'modified' => '2014-09-08 20:58:34'
		),
		array(
			'id' => '501',
			'role_id' => '9',
			'hero_id' => '53',
			'level' => '0',
			'created' => '2014-09-08 20:58:40',
			'modified' => '2014-09-08 20:58:40'
		),
		array(
			'id' => '502',
			'role_id' => '10',
			'hero_id' => '53',
			'level' => '5',
			'created' => '2014-09-08 20:58:44',
			'modified' => '2014-09-08 20:58:44'
		),
		array(
			'id' => '503',
			'role_id' => '11',
			'hero_id' => '53',
			'level' => '0',
			'created' => '2014-09-08 20:58:48',
			'modified' => '2014-09-08 20:58:48'
		),
		array(
			'id' => '504',
			'role_id' => '3',
			'hero_id' => '55',
			'level' => '0',
			'created' => '2014-09-08 20:59:21',
			'modified' => '2014-09-08 20:59:21'
		),
		array(
			'id' => '505',
			'role_id' => '2',
			'hero_id' => '55',
			'level' => '1',
			'created' => '2014-09-08 20:59:26',
			'modified' => '2014-09-08 20:59:26'
		),
		array(
			'id' => '506',
			'role_id' => '1',
			'hero_id' => '55',
			'level' => '10',
			'created' => '2014-09-08 20:59:30',
			'modified' => '2014-09-08 20:59:30'
		),
		array(
			'id' => '507',
			'role_id' => '4',
			'hero_id' => '55',
			'level' => '5',
			'created' => '2014-09-08 20:59:38',
			'modified' => '2014-09-08 20:59:38'
		),
		array(
			'id' => '508',
			'role_id' => '5',
			'hero_id' => '55',
			'level' => '1',
			'created' => '2014-09-08 20:59:56',
			'modified' => '2014-09-08 20:59:56'
		),
		array(
			'id' => '509',
			'role_id' => '7',
			'hero_id' => '55',
			'level' => '0',
			'created' => '2014-09-08 21:00:01',
			'modified' => '2014-09-08 21:00:01'
		),
		array(
			'id' => '510',
			'role_id' => '8',
			'hero_id' => '55',
			'level' => '0',
			'created' => '2014-09-08 21:00:10',
			'modified' => '2014-09-08 21:00:10'
		),
		array(
			'id' => '511',
			'role_id' => '9',
			'hero_id' => '55',
			'level' => '0',
			'created' => '2014-09-08 21:00:13',
			'modified' => '2014-09-08 21:00:13'
		),
		array(
			'id' => '512',
			'role_id' => '10',
			'hero_id' => '55',
			'level' => '10',
			'created' => '2014-09-08 21:00:17',
			'modified' => '2014-09-08 21:00:17'
		),
		array(
			'id' => '513',
			'role_id' => '11',
			'hero_id' => '55',
			'level' => '0',
			'created' => '2014-09-08 21:00:21',
			'modified' => '2014-09-08 21:00:21'
		),
		array(
			'id' => '514',
			'role_id' => '3',
			'hero_id' => '57',
			'level' => '10',
			'created' => '2014-09-08 21:00:30',
			'modified' => '2014-09-08 21:00:30'
		),
		array(
			'id' => '515',
			'role_id' => '2',
			'hero_id' => '57',
			'level' => '5',
			'created' => '2014-09-08 21:00:40',
			'modified' => '2014-09-08 21:00:40'
		),
		array(
			'id' => '516',
			'role_id' => '6',
			'hero_id' => '57',
			'level' => '1',
			'created' => '2014-09-08 21:00:46',
			'modified' => '2014-09-08 21:00:46'
		),
		array(
			'id' => '517',
			'role_id' => '4',
			'hero_id' => '57',
			'level' => '0',
			'created' => '2014-09-08 21:01:08',
			'modified' => '2014-09-08 21:01:08'
		),
		array(
			'id' => '518',
			'role_id' => '5',
			'hero_id' => '57',
			'level' => '0',
			'created' => '2014-09-08 21:01:13',
			'modified' => '2014-09-08 21:01:13'
		),
		array(
			'id' => '519',
			'role_id' => '7',
			'hero_id' => '57',
			'level' => '1',
			'created' => '2014-09-08 21:01:20',
			'modified' => '2014-09-08 21:01:20'
		),
		array(
			'id' => '520',
			'role_id' => '8',
			'hero_id' => '57',
			'level' => '1',
			'created' => '2014-09-08 21:01:22',
			'modified' => '2014-09-08 21:01:22'
		),
		array(
			'id' => '521',
			'role_id' => '9',
			'hero_id' => '57',
			'level' => '1',
			'created' => '2014-09-08 21:01:26',
			'modified' => '2014-09-08 21:01:26'
		),
		array(
			'id' => '522',
			'role_id' => '10',
			'hero_id' => '57',
			'level' => '5',
			'created' => '2014-09-08 21:01:29',
			'modified' => '2014-09-08 21:01:29'
		),
		array(
			'id' => '523',
			'role_id' => '11',
			'hero_id' => '57',
			'level' => '1',
			'created' => '2014-09-08 21:01:33',
			'modified' => '2014-09-08 21:01:33'
		),
		array(
			'id' => '524',
			'role_id' => '3',
			'hero_id' => '60',
			'level' => '0',
			'created' => '2014-09-08 21:01:44',
			'modified' => '2014-09-08 21:01:44'
		),
		array(
			'id' => '525',
			'role_id' => '2',
			'hero_id' => '60',
			'level' => '1',
			'created' => '2014-09-08 21:01:47',
			'modified' => '2014-09-08 21:01:47'
		),
		array(
			'id' => '526',
			'role_id' => '1',
			'hero_id' => '60',
			'level' => '10',
			'created' => '2014-09-08 21:01:53',
			'modified' => '2014-09-08 21:01:53'
		),
		array(
			'id' => '527',
			'role_id' => '4',
			'hero_id' => '60',
			'level' => '0',
			'created' => '2014-09-08 21:01:59',
			'modified' => '2014-09-08 21:01:59'
		),
		array(
			'id' => '528',
			'role_id' => '5',
			'hero_id' => '60',
			'level' => '1',
			'created' => '2014-09-08 21:02:03',
			'modified' => '2014-09-08 21:02:03'
		),
		array(
			'id' => '529',
			'role_id' => '7',
			'hero_id' => '60',
			'level' => '1',
			'created' => '2014-09-08 21:02:09',
			'modified' => '2014-09-08 21:02:09'
		),
		array(
			'id' => '530',
			'role_id' => '8',
			'hero_id' => '60',
			'level' => '0',
			'created' => '2014-09-08 21:02:13',
			'modified' => '2014-09-08 21:02:13'
		),
		array(
			'id' => '531',
			'role_id' => '9',
			'hero_id' => '60',
			'level' => '0',
			'created' => '2014-09-08 21:02:18',
			'modified' => '2014-09-08 21:02:18'
		),
		array(
			'id' => '532',
			'role_id' => '10',
			'hero_id' => '60',
			'level' => '5',
			'created' => '2014-09-08 21:02:26',
			'modified' => '2014-09-08 21:02:26'
		),
		array(
			'id' => '533',
			'role_id' => '11',
			'hero_id' => '60',
			'level' => '0',
			'created' => '2014-09-08 21:02:31',
			'modified' => '2014-09-08 21:02:31'
		),
		array(
			'id' => '534',
			'role_id' => '3',
			'hero_id' => '61',
			'level' => '5',
			'created' => '2014-09-08 21:02:50',
			'modified' => '2014-09-08 21:02:50'
		),
		array(
			'id' => '535',
			'role_id' => '2',
			'hero_id' => '61',
			'level' => '1',
			'created' => '2014-09-08 21:02:56',
			'modified' => '2014-09-08 21:02:56'
		),
		array(
			'id' => '536',
			'role_id' => '1',
			'hero_id' => '61',
			'level' => '1',
			'created' => '2014-09-08 21:03:00',
			'modified' => '2014-09-08 21:03:00'
		),
		array(
			'id' => '537',
			'role_id' => '4',
			'hero_id' => '61',
			'level' => '5',
			'created' => '2014-09-08 21:03:05',
			'modified' => '2014-09-08 21:03:05'
		),
		array(
			'id' => '538',
			'role_id' => '5',
			'hero_id' => '61',
			'level' => '0',
			'created' => '2014-09-08 21:03:12',
			'modified' => '2014-09-08 21:03:12'
		),
		array(
			'id' => '539',
			'role_id' => '7',
			'hero_id' => '61',
			'level' => '5',
			'created' => '2014-09-08 21:03:19',
			'modified' => '2014-09-08 21:03:19'
		),
		array(
			'id' => '540',
			'role_id' => '8',
			'hero_id' => '61',
			'level' => '0',
			'created' => '2014-09-08 21:03:23',
			'modified' => '2014-09-08 21:03:23'
		),
		array(
			'id' => '541',
			'role_id' => '9',
			'hero_id' => '61',
			'level' => '5',
			'created' => '2014-09-08 21:03:28',
			'modified' => '2014-09-08 21:03:28'
		),
		array(
			'id' => '542',
			'role_id' => '10',
			'hero_id' => '61',
			'level' => '5',
			'created' => '2014-09-08 21:03:32',
			'modified' => '2014-09-08 21:03:32'
		),
		array(
			'id' => '543',
			'role_id' => '11',
			'hero_id' => '61',
			'level' => '0',
			'created' => '2014-09-08 21:03:40',
			'modified' => '2014-09-08 21:03:40'
		),
		array(
			'id' => '544',
			'role_id' => '3',
			'hero_id' => '43',
			'level' => '1',
			'created' => '2014-09-08 21:04:18',
			'modified' => '2014-09-08 21:04:18'
		),
		array(
			'id' => '545',
			'role_id' => '2',
			'hero_id' => '43',
			'level' => '1',
			'created' => '2014-09-08 21:04:21',
			'modified' => '2014-09-08 21:04:21'
		),
		array(
			'id' => '546',
			'role_id' => '6',
			'hero_id' => '43',
			'level' => '0',
			'created' => '2014-09-08 21:05:37',
			'modified' => '2014-09-08 21:06:27'
		),
		array(
			'id' => '547',
			'role_id' => '4',
			'hero_id' => '43',
			'level' => '1',
			'created' => '2014-09-08 21:06:18',
			'modified' => '2014-09-08 21:06:18'
		),
		array(
			'id' => '548',
			'role_id' => '5',
			'hero_id' => '43',
			'level' => '1',
			'created' => '2014-09-08 21:06:43',
			'modified' => '2014-09-08 21:06:43'
		),
		array(
			'id' => '549',
			'role_id' => '7',
			'hero_id' => '43',
			'level' => '5',
			'created' => '2014-09-08 21:06:47',
			'modified' => '2014-09-08 21:06:47'
		),
		array(
			'id' => '550',
			'role_id' => '8',
			'hero_id' => '43',
			'level' => '0',
			'created' => '2014-09-08 21:06:51',
			'modified' => '2014-09-08 21:06:51'
		),
		array(
			'id' => '551',
			'role_id' => '9',
			'hero_id' => '43',
			'level' => '0',
			'created' => '2014-09-08 21:06:56',
			'modified' => '2014-09-08 21:06:56'
		),
		array(
			'id' => '552',
			'role_id' => '10',
			'hero_id' => '43',
			'level' => '5',
			'created' => '2014-09-08 21:06:59',
			'modified' => '2014-09-08 21:06:59'
		),
		array(
			'id' => '553',
			'role_id' => '11',
			'hero_id' => '43',
			'level' => '0',
			'created' => '2014-09-08 21:07:04',
			'modified' => '2014-09-08 21:07:04'
		),
		array(
			'id' => '554',
			'role_id' => '3',
			'hero_id' => '45',
			'level' => '5',
			'created' => '2014-09-08 21:07:18',
			'modified' => '2014-09-08 21:07:18'
		),
		array(
			'id' => '555',
			'role_id' => '2',
			'hero_id' => '45',
			'level' => '0',
			'created' => '2014-09-08 21:07:23',
			'modified' => '2014-09-08 21:07:23'
		),
		array(
			'id' => '556',
			'role_id' => '4',
			'hero_id' => '45',
			'level' => '0',
			'created' => '2014-09-08 21:07:27',
			'modified' => '2014-09-08 21:07:27'
		),
		array(
			'id' => '557',
			'role_id' => '5',
			'hero_id' => '45',
			'level' => '0',
			'created' => '2014-09-08 21:07:31',
			'modified' => '2014-09-08 21:07:31'
		),
		array(
			'id' => '558',
			'role_id' => '6',
			'hero_id' => '45',
			'level' => '5',
			'created' => '2014-09-08 21:07:35',
			'modified' => '2014-09-08 21:07:35'
		),
		array(
			'id' => '559',
			'role_id' => '7',
			'hero_id' => '45',
			'level' => '10',
			'created' => '2014-09-08 21:07:39',
			'modified' => '2014-09-08 21:07:39'
		),
		array(
			'id' => '560',
			'role_id' => '8',
			'hero_id' => '45',
			'level' => '0',
			'created' => '2014-09-08 21:07:45',
			'modified' => '2014-09-08 21:07:45'
		),
		array(
			'id' => '561',
			'role_id' => '9',
			'hero_id' => '45',
			'level' => '0',
			'created' => '2014-09-08 21:07:48',
			'modified' => '2014-09-08 21:07:48'
		),
		array(
			'id' => '562',
			'role_id' => '10',
			'hero_id' => '45',
			'level' => '10',
			'created' => '2014-09-08 21:07:53',
			'modified' => '2014-09-08 21:07:53'
		),
		array(
			'id' => '563',
			'role_id' => '11',
			'hero_id' => '45',
			'level' => '0',
			'created' => '2014-09-08 21:07:58',
			'modified' => '2014-09-08 21:07:58'
		),
		array(
			'id' => '564',
			'role_id' => '3',
			'hero_id' => '49',
			'level' => '1',
			'created' => '2014-09-08 21:08:08',
			'modified' => '2014-09-08 21:08:08'
		),
		array(
			'id' => '565',
			'role_id' => '2',
			'hero_id' => '49',
			'level' => '0',
			'created' => '2014-09-08 21:08:12',
			'modified' => '2014-09-08 21:08:12'
		),
		array(
			'id' => '566',
			'role_id' => '4',
			'hero_id' => '49',
			'level' => '5',
			'created' => '2014-09-08 21:08:17',
			'modified' => '2014-09-08 21:08:17'
		),
		array(
			'id' => '567',
			'role_id' => '5',
			'hero_id' => '49',
			'level' => '0',
			'created' => '2014-09-08 21:08:21',
			'modified' => '2014-09-08 21:08:21'
		),
		array(
			'id' => '568',
			'role_id' => '6',
			'hero_id' => '49',
			'level' => '1',
			'created' => '2014-09-08 21:08:25',
			'modified' => '2014-09-08 21:08:25'
		),
		array(
			'id' => '569',
			'role_id' => '7',
			'hero_id' => '49',
			'level' => '5',
			'created' => '2014-09-08 21:08:29',
			'modified' => '2014-09-08 21:08:29'
		),
		array(
			'id' => '570',
			'role_id' => '8',
			'hero_id' => '49',
			'level' => '0',
			'created' => '2014-09-08 21:08:33',
			'modified' => '2014-09-08 21:08:33'
		),
		array(
			'id' => '571',
			'role_id' => '9',
			'hero_id' => '49',
			'level' => '0',
			'created' => '2014-09-08 21:08:51',
			'modified' => '2014-09-08 21:08:51'
		),
		array(
			'id' => '572',
			'role_id' => '10',
			'hero_id' => '49',
			'level' => '5',
			'created' => '2014-09-08 21:08:56',
			'modified' => '2014-09-08 21:08:56'
		),
		array(
			'id' => '573',
			'role_id' => '11',
			'hero_id' => '49',
			'level' => '0',
			'created' => '2014-09-08 21:09:24',
			'modified' => '2014-09-08 21:09:24'
		),
		array(
			'id' => '574',
			'role_id' => '3',
			'hero_id' => '54',
			'level' => '1',
			'created' => '2014-09-08 21:09:42',
			'modified' => '2014-09-08 21:09:42'
		),
		array(
			'id' => '575',
			'role_id' => '2',
			'hero_id' => '54',
			'level' => '0',
			'created' => '2014-09-08 21:09:47',
			'modified' => '2014-09-08 21:09:47'
		),
		array(
			'id' => '576',
			'role_id' => '4',
			'hero_id' => '54',
			'level' => '0',
			'created' => '2014-09-08 21:09:51',
			'modified' => '2014-09-08 21:09:51'
		),
		array(
			'id' => '577',
			'role_id' => '5',
			'hero_id' => '54',
			'level' => '0',
			'created' => '2014-09-08 21:09:55',
			'modified' => '2014-09-08 21:09:55'
		),
		array(
			'id' => '578',
			'role_id' => '6',
			'hero_id' => '54',
			'level' => '5',
			'created' => '2014-09-08 21:10:00',
			'modified' => '2014-09-08 21:10:00'
		),
		array(
			'id' => '579',
			'role_id' => '7',
			'hero_id' => '54',
			'level' => '5',
			'created' => '2014-09-08 21:10:04',
			'modified' => '2014-09-08 21:10:04'
		),
		array(
			'id' => '580',
			'role_id' => '8',
			'hero_id' => '54',
			'level' => '10',
			'created' => '2014-09-08 21:10:08',
			'modified' => '2014-09-08 21:10:08'
		),
		array(
			'id' => '581',
			'role_id' => '9',
			'hero_id' => '54',
			'level' => '0',
			'created' => '2014-09-08 21:10:14',
			'modified' => '2014-09-08 21:10:14'
		),
		array(
			'id' => '582',
			'role_id' => '10',
			'hero_id' => '54',
			'level' => '1',
			'created' => '2014-09-08 21:10:18',
			'modified' => '2014-09-08 21:10:18'
		),
		array(
			'id' => '583',
			'role_id' => '11',
			'hero_id' => '54',
			'level' => '10',
			'created' => '2014-09-08 21:10:22',
			'modified' => '2014-09-08 21:10:22'
		),
		array(
			'id' => '584',
			'role_id' => '3',
			'hero_id' => '56',
			'level' => '5',
			'created' => '2014-09-08 21:10:45',
			'modified' => '2014-09-08 21:10:45'
		),
		array(
			'id' => '585',
			'role_id' => '2',
			'hero_id' => '56',
			'level' => '1',
			'created' => '2014-09-08 21:10:48',
			'modified' => '2014-09-08 21:10:48'
		),
		array(
			'id' => '586',
			'role_id' => '4',
			'hero_id' => '56',
			'level' => '5',
			'created' => '2014-09-08 21:10:52',
			'modified' => '2014-09-08 21:10:52'
		),
		array(
			'id' => '587',
			'role_id' => '5',
			'hero_id' => '56',
			'level' => '0',
			'created' => '2014-09-08 21:10:58',
			'modified' => '2014-09-08 21:10:58'
		),
		array(
			'id' => '588',
			'role_id' => '6',
			'hero_id' => '56',
			'level' => '0',
			'created' => '2014-09-08 21:11:01',
			'modified' => '2014-09-08 21:11:01'
		),
		array(
			'id' => '589',
			'role_id' => '7',
			'hero_id' => '56',
			'level' => '0',
			'created' => '2014-09-08 21:11:04',
			'modified' => '2014-09-08 21:11:04'
		),
		array(
			'id' => '590',
			'role_id' => '8',
			'hero_id' => '56',
			'level' => '0',
			'created' => '2014-09-08 21:11:06',
			'modified' => '2014-09-08 21:11:06'
		),
		array(
			'id' => '591',
			'role_id' => '9',
			'hero_id' => '56',
			'level' => '1',
			'created' => '2014-09-08 21:11:10',
			'modified' => '2014-09-08 21:11:10'
		),
		array(
			'id' => '592',
			'role_id' => '10',
			'hero_id' => '56',
			'level' => '10',
			'created' => '2014-09-08 21:11:14',
			'modified' => '2014-09-08 21:11:14'
		),
		array(
			'id' => '593',
			'role_id' => '11',
			'hero_id' => '56',
			'level' => '0',
			'created' => '2014-09-08 21:11:18',
			'modified' => '2014-09-08 21:11:18'
		),
		array(
			'id' => '594',
			'role_id' => '3',
			'hero_id' => '58',
			'level' => '0',
			'created' => '2014-09-08 21:11:26',
			'modified' => '2014-09-08 21:11:26'
		),
		array(
			'id' => '595',
			'role_id' => '2',
			'hero_id' => '58',
			'level' => '0',
			'created' => '2014-09-08 21:11:31',
			'modified' => '2014-09-08 21:11:31'
		),
		array(
			'id' => '596',
			'role_id' => '4',
			'hero_id' => '58',
			'level' => '1',
			'created' => '2014-09-08 21:11:35',
			'modified' => '2014-09-08 21:11:35'
		),
		array(
			'id' => '597',
			'role_id' => '5',
			'hero_id' => '58',
			'level' => '0',
			'created' => '2014-09-08 21:11:41',
			'modified' => '2014-09-08 21:11:41'
		),
		array(
			'id' => '598',
			'role_id' => '6',
			'hero_id' => '58',
			'level' => '0',
			'created' => '2014-09-08 21:11:52',
			'modified' => '2014-09-08 21:11:52'
		),
		array(
			'id' => '599',
			'role_id' => '7',
			'hero_id' => '58',
			'level' => '1',
			'created' => '2014-09-08 21:11:55',
			'modified' => '2014-09-08 21:11:55'
		),
		array(
			'id' => '600',
			'role_id' => '8',
			'hero_id' => '58',
			'level' => '0',
			'created' => '2014-09-08 21:12:00',
			'modified' => '2014-09-08 21:12:00'
		),
		array(
			'id' => '601',
			'role_id' => '9',
			'hero_id' => '58',
			'level' => '1',
			'created' => '2014-09-08 21:12:05',
			'modified' => '2014-09-08 21:12:05'
		),
		array(
			'id' => '602',
			'role_id' => '10',
			'hero_id' => '58',
			'level' => '10',
			'created' => '2014-09-08 21:12:12',
			'modified' => '2014-09-08 21:12:12'
		),
		array(
			'id' => '603',
			'role_id' => '11',
			'hero_id' => '58',
			'level' => '0',
			'created' => '2014-09-08 21:12:17',
			'modified' => '2014-09-08 21:12:17'
		),
		array(
			'id' => '604',
			'role_id' => '3',
			'hero_id' => '59',
			'level' => '1',
			'created' => '2014-09-08 21:12:28',
			'modified' => '2014-09-08 21:12:28'
		),
		array(
			'id' => '605',
			'role_id' => '2',
			'hero_id' => '59',
			'level' => '1',
			'created' => '2014-09-08 21:12:31',
			'modified' => '2014-09-08 21:12:31'
		),
		array(
			'id' => '606',
			'role_id' => '4',
			'hero_id' => '59',
			'level' => '1',
			'created' => '2014-09-08 21:12:35',
			'modified' => '2014-09-08 21:12:35'
		),
		array(
			'id' => '607',
			'role_id' => '5',
			'hero_id' => '59',
			'level' => '0',
			'created' => '2014-09-08 21:12:40',
			'modified' => '2014-09-08 21:12:40'
		),
		array(
			'id' => '608',
			'role_id' => '6',
			'hero_id' => '59',
			'level' => '0',
			'created' => '2014-09-08 21:12:44',
			'modified' => '2014-09-08 21:12:44'
		),
		array(
			'id' => '609',
			'role_id' => '7',
			'hero_id' => '59',
			'level' => '5',
			'created' => '2014-09-08 21:12:48',
			'modified' => '2014-09-08 21:12:48'
		),
		array(
			'id' => '610',
			'role_id' => '8',
			'hero_id' => '59',
			'level' => '0',
			'created' => '2014-09-08 21:12:52',
			'modified' => '2014-09-08 21:12:52'
		),
		array(
			'id' => '611',
			'role_id' => '9',
			'hero_id' => '59',
			'level' => '0',
			'created' => '2014-09-08 21:12:57',
			'modified' => '2014-09-08 21:12:57'
		),
		array(
			'id' => '612',
			'role_id' => '10',
			'hero_id' => '59',
			'level' => '5',
			'created' => '2014-09-08 21:13:01',
			'modified' => '2014-09-08 21:13:01'
		),
		array(
			'id' => '613',
			'role_id' => '11',
			'hero_id' => '59',
			'level' => '0',
			'created' => '2014-09-08 21:13:05',
			'modified' => '2014-09-08 21:13:05'
		),
		array(
			'id' => '614',
			'role_id' => '3',
			'hero_id' => '62',
			'level' => '0',
			'created' => '2014-09-08 21:13:14',
			'modified' => '2014-09-08 21:13:14'
		),
		array(
			'id' => '615',
			'role_id' => '2',
			'hero_id' => '62',
			'level' => '0',
			'created' => '2014-09-08 21:13:17',
			'modified' => '2014-09-08 21:13:17'
		),
		array(
			'id' => '616',
			'role_id' => '4',
			'hero_id' => '62',
			'level' => '0',
			'created' => '2014-09-08 21:13:21',
			'modified' => '2014-09-08 21:13:21'
		),
		array(
			'id' => '617',
			'role_id' => '5',
			'hero_id' => '62',
			'level' => '0',
			'created' => '2014-09-08 21:13:24',
			'modified' => '2014-09-08 21:13:24'
		),
		array(
			'id' => '618',
			'role_id' => '6',
			'hero_id' => '62',
			'level' => '0',
			'created' => '2014-09-08 21:13:27',
			'modified' => '2014-09-08 21:13:27'
		),
		array(
			'id' => '619',
			'role_id' => '7',
			'hero_id' => '62',
			'level' => '5',
			'created' => '2014-09-08 21:13:33',
			'modified' => '2014-09-08 21:13:33'
		),
		array(
			'id' => '620',
			'role_id' => '8',
			'hero_id' => '62',
			'level' => '0',
			'created' => '2014-09-08 21:13:36',
			'modified' => '2014-09-08 21:13:36'
		),
		array(
			'id' => '621',
			'role_id' => '9',
			'hero_id' => '62',
			'level' => '10',
			'created' => '2014-09-08 21:13:42',
			'modified' => '2014-09-08 21:13:42'
		),
		array(
			'id' => '622',
			'role_id' => '10',
			'hero_id' => '62',
			'level' => '5',
			'created' => '2014-09-08 21:13:46',
			'modified' => '2014-09-08 21:13:46'
		),
		array(
			'id' => '623',
			'role_id' => '11',
			'hero_id' => '62',
			'level' => '0',
			'created' => '2014-09-08 21:13:52',
			'modified' => '2014-09-08 21:13:52'
		),
		array(
			'id' => '624',
			'role_id' => '3',
			'hero_id' => '63',
			'level' => '0',
			'created' => '2014-09-08 21:14:01',
			'modified' => '2014-09-08 21:14:01'
		),
		array(
			'id' => '625',
			'role_id' => '2',
			'hero_id' => '63',
			'level' => '1',
			'created' => '2014-09-08 21:14:04',
			'modified' => '2014-09-08 21:14:04'
		),
		array(
			'id' => '626',
			'role_id' => '4',
			'hero_id' => '63',
			'level' => '1',
			'created' => '2014-09-08 21:14:08',
			'modified' => '2014-09-08 21:14:08'
		),
		array(
			'id' => '627',
			'role_id' => '5',
			'hero_id' => '63',
			'level' => '1',
			'created' => '2014-09-08 21:14:11',
			'modified' => '2014-09-08 21:14:11'
		),
		array(
			'id' => '628',
			'role_id' => '6',
			'hero_id' => '63',
			'level' => '10',
			'created' => '2014-09-08 21:14:17',
			'modified' => '2014-09-08 21:14:17'
		),
		array(
			'id' => '629',
			'role_id' => '7',
			'hero_id' => '63',
			'level' => '1',
			'created' => '2014-09-08 21:14:22',
			'modified' => '2014-09-08 21:14:22'
		),
		array(
			'id' => '630',
			'role_id' => '8',
			'hero_id' => '63',
			'level' => '0',
			'created' => '2014-09-08 21:14:26',
			'modified' => '2014-09-08 21:14:26'
		),
		array(
			'id' => '631',
			'role_id' => '9',
			'hero_id' => '63',
			'level' => '5',
			'created' => '2014-09-08 21:14:30',
			'modified' => '2014-09-08 21:14:30'
		),
		array(
			'id' => '632',
			'role_id' => '10',
			'hero_id' => '63',
			'level' => '5',
			'created' => '2014-09-08 21:14:33',
			'modified' => '2014-09-08 21:14:33'
		),
		array(
			'id' => '633',
			'role_id' => '11',
			'hero_id' => '63',
			'level' => '0',
			'created' => '2014-09-08 21:14:37',
			'modified' => '2014-09-08 21:14:37'
		),
		array(
			'id' => '634',
			'role_id' => '3',
			'hero_id' => '64',
			'level' => '0',
			'created' => '2014-09-08 21:14:58',
			'modified' => '2014-09-08 21:14:58'
		),
		array(
			'id' => '635',
			'role_id' => '2',
			'hero_id' => '64',
			'level' => '0',
			'created' => '2014-09-08 21:15:00',
			'modified' => '2014-09-08 21:15:00'
		),
		array(
			'id' => '636',
			'role_id' => '4',
			'hero_id' => '64',
			'level' => '5',
			'created' => '2014-09-08 21:15:05',
			'modified' => '2014-09-08 21:15:05'
		),
		array(
			'id' => '637',
			'role_id' => '5',
			'hero_id' => '64',
			'level' => '0',
			'created' => '2014-09-08 21:15:10',
			'modified' => '2014-09-08 21:15:10'
		),
		array(
			'id' => '638',
			'role_id' => '6',
			'hero_id' => '64',
			'level' => '1',
			'created' => '2014-09-08 21:15:14',
			'modified' => '2014-09-08 21:15:14'
		),
		array(
			'id' => '639',
			'role_id' => '7',
			'hero_id' => '64',
			'level' => '0',
			'created' => '2014-09-08 21:15:17',
			'modified' => '2014-09-08 21:15:17'
		),
		array(
			'id' => '640',
			'role_id' => '8',
			'hero_id' => '64',
			'level' => '0',
			'created' => '2014-09-08 21:15:22',
			'modified' => '2014-09-08 21:15:22'
		),
		array(
			'id' => '641',
			'role_id' => '9',
			'hero_id' => '64',
			'level' => '10',
			'created' => '2014-09-08 21:15:26',
			'modified' => '2014-09-08 21:15:26'
		),
		array(
			'id' => '642',
			'role_id' => '10',
			'hero_id' => '64',
			'level' => '10',
			'created' => '2014-09-08 21:15:29',
			'modified' => '2014-09-08 21:15:29'
		),
		array(
			'id' => '643',
			'role_id' => '11',
			'hero_id' => '64',
			'level' => '0',
			'created' => '2014-09-08 21:15:33',
			'modified' => '2014-09-08 21:15:33'
		),
		array(
			'id' => '644',
			'role_id' => '3',
			'hero_id' => '66',
			'level' => '1',
			'created' => '2014-09-08 21:15:42',
			'modified' => '2014-09-08 21:15:42'
		),
		array(
			'id' => '645',
			'role_id' => '2',
			'hero_id' => '66',
			'level' => '0',
			'created' => '2014-09-08 21:15:48',
			'modified' => '2014-09-08 21:15:48'
		),
		array(
			'id' => '646',
			'role_id' => '4',
			'hero_id' => '66',
			'level' => '10',
			'created' => '2014-09-08 21:15:53',
			'modified' => '2014-09-08 21:15:53'
		),
		array(
			'id' => '647',
			'role_id' => '5',
			'hero_id' => '66',
			'level' => '0',
			'created' => '2014-09-08 21:15:58',
			'modified' => '2014-09-08 21:15:58'
		),
		array(
			'id' => '648',
			'role_id' => '6',
			'hero_id' => '66',
			'level' => '1',
			'created' => '2014-09-08 21:16:02',
			'modified' => '2014-09-08 21:16:02'
		),
		array(
			'id' => '649',
			'role_id' => '7',
			'hero_id' => '66',
			'level' => '0',
			'created' => '2014-09-08 21:16:06',
			'modified' => '2014-09-08 21:16:06'
		),
		array(
			'id' => '650',
			'role_id' => '8',
			'hero_id' => '66',
			'level' => '0',
			'created' => '2014-09-08 21:16:10',
			'modified' => '2014-09-08 21:16:10'
		),
		array(
			'id' => '651',
			'role_id' => '9',
			'hero_id' => '66',
			'level' => '10',
			'created' => '2014-09-08 21:16:13',
			'modified' => '2014-09-08 21:16:13'
		),
		array(
			'id' => '652',
			'role_id' => '10',
			'hero_id' => '66',
			'level' => '10',
			'created' => '2014-09-08 21:16:17',
			'modified' => '2014-09-08 21:16:17'
		),
		array(
			'id' => '653',
			'role_id' => '11',
			'hero_id' => '66',
			'level' => '0',
			'created' => '2014-09-08 21:16:20',
			'modified' => '2014-09-08 21:16:20'
		),
		array(
			'id' => '654',
			'role_id' => '3',
			'hero_id' => '68',
			'level' => '1',
			'created' => '2014-09-08 21:16:28',
			'modified' => '2014-09-08 21:16:28'
		),
		array(
			'id' => '655',
			'role_id' => '2',
			'hero_id' => '68',
			'level' => '1',
			'created' => '2014-09-08 21:16:31',
			'modified' => '2014-09-08 21:16:31'
		),
		array(
			'id' => '656',
			'role_id' => '4',
			'hero_id' => '68',
			'level' => '0',
			'created' => '2014-09-08 21:16:35',
			'modified' => '2014-09-08 21:16:35'
		),
		array(
			'id' => '657',
			'role_id' => '5',
			'hero_id' => '68',
			'level' => '5',
			'created' => '2014-09-08 21:16:43',
			'modified' => '2014-09-08 21:16:43'
		),
		array(
			'id' => '658',
			'role_id' => '6',
			'hero_id' => '68',
			'level' => '5',
			'created' => '2014-09-08 21:16:55',
			'modified' => '2014-09-08 21:16:55'
		),
		array(
			'id' => '659',
			'role_id' => '7',
			'hero_id' => '68',
			'level' => '5',
			'created' => '2014-09-08 21:16:57',
			'modified' => '2014-09-08 21:16:57'
		),
		array(
			'id' => '660',
			'role_id' => '8',
			'hero_id' => '68',
			'level' => '0',
			'created' => '2014-09-08 21:17:01',
			'modified' => '2014-09-08 21:17:01'
		),
		array(
			'id' => '661',
			'role_id' => '9',
			'hero_id' => '68',
			'level' => '10',
			'created' => '2014-09-08 21:17:08',
			'modified' => '2014-09-08 21:17:08'
		),
		array(
			'id' => '662',
			'role_id' => '10',
			'hero_id' => '68',
			'level' => '5',
			'created' => '2014-09-08 21:17:12',
			'modified' => '2014-09-08 21:17:12'
		),
		array(
			'id' => '663',
			'role_id' => '11',
			'hero_id' => '68',
			'level' => '0',
			'created' => '2014-09-08 21:17:16',
			'modified' => '2014-09-08 21:17:16'
		),
		array(
			'id' => '664',
			'role_id' => '3',
			'hero_id' => '71',
			'level' => '1',
			'created' => '2014-09-08 21:17:27',
			'modified' => '2014-09-08 21:17:27'
		),
		array(
			'id' => '665',
			'role_id' => '2',
			'hero_id' => '71',
			'level' => '5',
			'created' => '2014-09-08 21:17:31',
			'modified' => '2014-09-08 21:17:31'
		),
		array(
			'id' => '666',
			'role_id' => '4',
			'hero_id' => '71',
			'level' => '0',
			'created' => '2014-09-08 21:17:35',
			'modified' => '2014-09-08 21:17:35'
		),
		array(
			'id' => '667',
			'role_id' => '5',
			'hero_id' => '71',
			'level' => '0',
			'created' => '2014-09-08 21:17:38',
			'modified' => '2014-09-08 21:17:38'
		),
		array(
			'id' => '668',
			'role_id' => '6',
			'hero_id' => '71',
			'level' => '0',
			'created' => '2014-09-08 21:17:42',
			'modified' => '2014-09-08 21:17:42'
		),
		array(
			'id' => '669',
			'role_id' => '7',
			'hero_id' => '71',
			'level' => '10',
			'created' => '2014-09-08 21:17:48',
			'modified' => '2014-09-08 21:17:48'
		),
		array(
			'id' => '670',
			'role_id' => '8',
			'hero_id' => '71',
			'level' => '1',
			'created' => '2014-09-08 21:17:53',
			'modified' => '2014-09-08 21:17:53'
		),
		array(
			'id' => '671',
			'role_id' => '9',
			'hero_id' => '71',
			'level' => '5',
			'created' => '2014-09-08 21:17:58',
			'modified' => '2014-09-08 21:17:58'
		),
		array(
			'id' => '672',
			'role_id' => '10',
			'hero_id' => '71',
			'level' => '5',
			'created' => '2014-09-08 21:18:03',
			'modified' => '2014-09-08 21:18:26'
		),
		array(
			'id' => '673',
			'role_id' => '11',
			'hero_id' => '71',
			'level' => '5',
			'created' => '2014-09-08 21:18:10',
			'modified' => '2014-09-08 21:18:10'
		),
		array(
			'id' => '674',
			'role_id' => '3',
			'hero_id' => '73',
			'level' => '1',
			'created' => '2014-09-08 21:18:45',
			'modified' => '2014-09-08 21:18:45'
		),
		array(
			'id' => '675',
			'role_id' => '2',
			'hero_id' => '73',
			'level' => '1',
			'created' => '2014-09-08 21:18:47',
			'modified' => '2014-09-08 21:18:47'
		),
		array(
			'id' => '676',
			'role_id' => '4',
			'hero_id' => '73',
			'level' => '0',
			'created' => '2014-09-08 21:18:51',
			'modified' => '2014-09-08 21:18:51'
		),
		array(
			'id' => '677',
			'role_id' => '5',
			'hero_id' => '73',
			'level' => '0',
			'created' => '2014-09-08 21:18:54',
			'modified' => '2014-09-08 21:18:54'
		),
		array(
			'id' => '678',
			'role_id' => '6',
			'hero_id' => '73',
			'level' => '0',
			'created' => '2014-09-08 21:18:59',
			'modified' => '2014-09-08 21:18:59'
		),
		array(
			'id' => '679',
			'role_id' => '7',
			'hero_id' => '73',
			'level' => '5',
			'created' => '2014-09-08 21:19:04',
			'modified' => '2014-09-08 21:19:04'
		),
		array(
			'id' => '680',
			'role_id' => '8',
			'hero_id' => '73',
			'level' => '0',
			'created' => '2014-09-08 21:19:10',
			'modified' => '2014-09-08 21:19:10'
		),
		array(
			'id' => '681',
			'role_id' => '9',
			'hero_id' => '73',
			'level' => '10',
			'created' => '2014-09-08 21:19:14',
			'modified' => '2014-09-08 21:19:14'
		),
		array(
			'id' => '682',
			'role_id' => '10',
			'hero_id' => '73',
			'level' => '5',
			'created' => '2014-09-08 21:19:20',
			'modified' => '2014-09-08 21:19:20'
		),
		array(
			'id' => '683',
			'role_id' => '11',
			'hero_id' => '73',
			'level' => '0',
			'created' => '2014-09-08 21:19:25',
			'modified' => '2014-09-08 21:19:25'
		),
		array(
			'id' => '684',
			'role_id' => '3',
			'hero_id' => '76',
			'level' => '1',
			'created' => '2014-09-08 21:19:33',
			'modified' => '2014-09-08 21:19:33'
		),
		array(
			'id' => '685',
			'role_id' => '2',
			'hero_id' => '76',
			'level' => '1',
			'created' => '2014-09-08 21:19:38',
			'modified' => '2014-09-08 21:19:38'
		),
		array(
			'id' => '686',
			'role_id' => '4',
			'hero_id' => '76',
			'level' => '5',
			'created' => '2014-09-08 21:19:46',
			'modified' => '2014-09-08 21:19:46'
		),
		array(
			'id' => '687',
			'role_id' => '5',
			'hero_id' => '76',
			'level' => '1',
			'created' => '2014-09-08 21:19:50',
			'modified' => '2014-09-08 21:19:50'
		),
		array(
			'id' => '688',
			'role_id' => '6',
			'hero_id' => '76',
			'level' => '5',
			'created' => '2014-09-08 21:19:58',
			'modified' => '2014-09-08 21:19:58'
		),
		array(
			'id' => '689',
			'role_id' => '7',
			'hero_id' => '76',
			'level' => '1',
			'created' => '2014-09-08 21:20:02',
			'modified' => '2014-09-08 21:20:02'
		),
		array(
			'id' => '690',
			'role_id' => '8',
			'hero_id' => '76',
			'level' => '0',
			'created' => '2014-09-08 21:20:06',
			'modified' => '2014-09-08 21:20:06'
		),
		array(
			'id' => '691',
			'role_id' => '9',
			'hero_id' => '76',
			'level' => '0',
			'created' => '2014-09-08 21:20:11',
			'modified' => '2014-09-08 21:20:11'
		),
		array(
			'id' => '692',
			'role_id' => '10',
			'hero_id' => '76',
			'level' => '10',
			'created' => '2014-09-08 21:20:15',
			'modified' => '2014-09-08 21:20:15'
		),
		array(
			'id' => '693',
			'role_id' => '11',
			'hero_id' => '76',
			'level' => '0',
			'created' => '2014-09-08 21:20:19',
			'modified' => '2014-09-08 21:20:19'
		),
		array(
			'id' => '694',
			'role_id' => '3',
			'hero_id' => '78',
			'level' => '0',
			'created' => '2014-09-08 21:20:30',
			'modified' => '2014-09-08 21:20:30'
		),
		array(
			'id' => '695',
			'role_id' => '2',
			'hero_id' => '78',
			'level' => '1',
			'created' => '2014-09-08 21:20:33',
			'modified' => '2014-09-08 21:20:33'
		),
		array(
			'id' => '696',
			'role_id' => '4',
			'hero_id' => '78',
			'level' => '1',
			'created' => '2014-09-08 21:20:37',
			'modified' => '2014-09-08 21:20:37'
		),
		array(
			'id' => '697',
			'role_id' => '5',
			'hero_id' => '78',
			'level' => '0',
			'created' => '2014-09-08 21:20:42',
			'modified' => '2014-09-08 21:20:42'
		),
		array(
			'id' => '698',
			'role_id' => '6',
			'hero_id' => '78',
			'level' => '1',
			'created' => '2014-09-08 21:20:46',
			'modified' => '2014-09-08 21:20:46'
		),
		array(
			'id' => '699',
			'role_id' => '7',
			'hero_id' => '78',
			'level' => '5',
			'created' => '2014-09-08 21:20:51',
			'modified' => '2014-09-08 21:20:51'
		),
		array(
			'id' => '700',
			'role_id' => '8',
			'hero_id' => '78',
			'level' => '0',
			'created' => '2014-09-08 21:20:56',
			'modified' => '2014-09-08 21:20:56'
		),
		array(
			'id' => '701',
			'role_id' => '9',
			'hero_id' => '78',
			'level' => '0',
			'created' => '2014-09-08 21:21:00',
			'modified' => '2014-09-08 21:21:00'
		),
		array(
			'id' => '702',
			'role_id' => '10',
			'hero_id' => '78',
			'level' => '10',
			'created' => '2014-09-08 21:21:04',
			'modified' => '2014-09-08 21:21:04'
		),
		array(
			'id' => '703',
			'role_id' => '11',
			'hero_id' => '78',
			'level' => '0',
			'created' => '2014-09-08 21:21:09',
			'modified' => '2014-09-08 21:21:09'
		),
		array(
			'id' => '704',
			'role_id' => '3',
			'hero_id' => '65',
			'level' => '0',
			'created' => '2014-09-08 22:14:29',
			'modified' => '2014-09-08 22:14:29'
		),
		array(
			'id' => '705',
			'role_id' => '2',
			'hero_id' => '65',
			'level' => '5',
			'created' => '2014-09-08 22:14:34',
			'modified' => '2014-09-08 22:14:34'
		),
		array(
			'id' => '706',
			'role_id' => '6',
			'hero_id' => '65',
			'level' => '1',
			'created' => '2014-09-08 22:14:46',
			'modified' => '2014-09-08 22:14:46'
		),
		array(
			'id' => '707',
			'role_id' => '4',
			'hero_id' => '65',
			'level' => '0',
			'created' => '2014-09-08 22:14:52',
			'modified' => '2014-09-08 22:14:52'
		),
		array(
			'id' => '708',
			'role_id' => '5',
			'hero_id' => '65',
			'level' => '0',
			'created' => '2014-09-08 22:15:06',
			'modified' => '2014-09-08 22:15:06'
		),
		array(
			'id' => '709',
			'role_id' => '7',
			'hero_id' => '65',
			'level' => '10',
			'created' => '2014-09-08 22:15:25',
			'modified' => '2014-09-08 22:15:25'
		),
		array(
			'id' => '710',
			'role_id' => '8',
			'hero_id' => '65',
			'level' => '10',
			'created' => '2014-09-08 22:15:30',
			'modified' => '2014-09-08 22:15:30'
		),
		array(
			'id' => '711',
			'role_id' => '9',
			'hero_id' => '65',
			'level' => '0',
			'created' => '2014-09-08 22:15:34',
			'modified' => '2014-09-08 22:15:34'
		),
		array(
			'id' => '712',
			'role_id' => '10',
			'hero_id' => '65',
			'level' => '0',
			'created' => '2014-09-08 22:15:39',
			'modified' => '2014-09-08 22:15:39'
		),
		array(
			'id' => '713',
			'role_id' => '11',
			'hero_id' => '65',
			'level' => '10',
			'created' => '2014-09-08 22:15:44',
			'modified' => '2014-09-08 22:15:44'
		),
		array(
			'id' => '714',
			'role_id' => '3',
			'hero_id' => '67',
			'level' => '10',
			'created' => '2014-09-08 22:15:52',
			'modified' => '2014-09-08 22:15:52'
		),
		array(
			'id' => '715',
			'role_id' => '2',
			'hero_id' => '67',
			'level' => '5',
			'created' => '2014-09-08 22:15:57',
			'modified' => '2014-09-08 22:15:57'
		),
		array(
			'id' => '716',
			'role_id' => '6',
			'hero_id' => '67',
			'level' => '1',
			'created' => '2014-09-08 22:16:05',
			'modified' => '2014-09-08 22:16:05'
		),
		array(
			'id' => '717',
			'role_id' => '4',
			'hero_id' => '67',
			'level' => '0',
			'created' => '2014-09-08 22:16:12',
			'modified' => '2014-09-08 22:16:12'
		),
		array(
			'id' => '718',
			'role_id' => '5',
			'hero_id' => '67',
			'level' => '0',
			'created' => '2014-09-08 22:16:16',
			'modified' => '2014-09-08 22:16:16'
		),
		array(
			'id' => '719',
			'role_id' => '7',
			'hero_id' => '67',
			'level' => '5',
			'created' => '2014-09-08 22:16:20',
			'modified' => '2014-09-08 22:16:28'
		),
		array(
			'id' => '720',
			'role_id' => '8',
			'hero_id' => '67',
			'level' => '0',
			'created' => '2014-09-08 22:16:51',
			'modified' => '2014-09-08 22:16:51'
		),
		array(
			'id' => '721',
			'role_id' => '9',
			'hero_id' => '67',
			'level' => '10',
			'created' => '2014-09-08 22:16:55',
			'modified' => '2014-09-08 22:16:55'
		),
		array(
			'id' => '722',
			'role_id' => '10',
			'hero_id' => '67',
			'level' => '0',
			'created' => '2014-09-08 22:17:00',
			'modified' => '2014-09-08 22:17:00'
		),
		array(
			'id' => '723',
			'role_id' => '11',
			'hero_id' => '67',
			'level' => '0',
			'created' => '2014-09-08 22:17:07',
			'modified' => '2014-09-08 22:17:07'
		),
		array(
			'id' => '724',
			'role_id' => '3',
			'hero_id' => '69',
			'level' => '5',
			'created' => '2014-09-08 22:17:18',
			'modified' => '2014-09-08 22:17:18'
		),
		array(
			'id' => '725',
			'role_id' => '2',
			'hero_id' => '69',
			'level' => '1',
			'created' => '2014-09-08 22:17:22',
			'modified' => '2014-09-08 22:17:22'
		),
		array(
			'id' => '726',
			'role_id' => '4',
			'hero_id' => '69',
			'level' => '0',
			'created' => '2014-09-08 22:19:54',
			'modified' => '2014-09-08 22:19:54'
		),
		array(
			'id' => '727',
			'role_id' => '5',
			'hero_id' => '69',
			'level' => '0',
			'created' => '2014-09-08 22:19:59',
			'modified' => '2014-09-08 22:19:59'
		),
		array(
			'id' => '728',
			'role_id' => '6',
			'hero_id' => '69',
			'level' => '0',
			'created' => '2014-09-08 22:20:02',
			'modified' => '2014-09-08 22:20:02'
		),
		array(
			'id' => '729',
			'role_id' => '7',
			'hero_id' => '69',
			'level' => '1',
			'created' => '2014-09-08 22:20:05',
			'modified' => '2014-09-08 22:20:05'
		),
		array(
			'id' => '730',
			'role_id' => '8',
			'hero_id' => '69',
			'level' => '0',
			'created' => '2014-09-08 22:20:09',
			'modified' => '2014-09-08 22:20:09'
		),
		array(
			'id' => '731',
			'role_id' => '9',
			'hero_id' => '69',
			'level' => '10',
			'created' => '2014-09-08 22:20:22',
			'modified' => '2014-09-08 22:20:22'
		),
		array(
			'id' => '732',
			'role_id' => '10',
			'hero_id' => '69',
			'level' => '5',
			'created' => '2014-09-08 22:20:28',
			'modified' => '2014-09-08 22:20:28'
		),
		array(
			'id' => '733',
			'role_id' => '11',
			'hero_id' => '69',
			'level' => '0',
			'created' => '2014-09-08 22:20:31',
			'modified' => '2014-09-08 22:20:31'
		),
		array(
			'id' => '734',
			'role_id' => '2',
			'hero_id' => '70',
			'level' => '1',
			'created' => '2014-09-08 22:20:40',
			'modified' => '2014-09-08 22:20:40'
		),
		array(
			'id' => '735',
			'role_id' => '3',
			'hero_id' => '70',
			'level' => '0',
			'created' => '2014-09-08 22:20:46',
			'modified' => '2014-09-08 22:20:46'
		),
		array(
			'id' => '736',
			'role_id' => '4',
			'hero_id' => '70',
			'level' => '1',
			'created' => '2014-09-08 22:20:49',
			'modified' => '2014-09-08 22:20:49'
		),
		array(
			'id' => '737',
			'role_id' => '5',
			'hero_id' => '70',
			'level' => '0',
			'created' => '2014-09-08 22:20:54',
			'modified' => '2014-09-08 22:20:54'
		),
		array(
			'id' => '738',
			'role_id' => '6',
			'hero_id' => '70',
			'level' => '5',
			'created' => '2014-09-08 22:21:00',
			'modified' => '2014-09-08 22:21:00'
		),
		array(
			'id' => '739',
			'role_id' => '7',
			'hero_id' => '70',
			'level' => '1',
			'created' => '2014-09-08 22:21:05',
			'modified' => '2014-09-08 22:21:05'
		),
		array(
			'id' => '740',
			'role_id' => '8',
			'hero_id' => '70',
			'level' => '5',
			'created' => '2014-09-08 22:21:14',
			'modified' => '2014-09-08 22:21:14'
		),
		array(
			'id' => '741',
			'role_id' => '9',
			'hero_id' => '70',
			'level' => '5',
			'created' => '2014-09-08 22:21:19',
			'modified' => '2014-09-08 22:21:19'
		),
		array(
			'id' => '742',
			'role_id' => '10',
			'hero_id' => '70',
			'level' => '1',
			'created' => '2014-09-08 22:21:22',
			'modified' => '2014-09-08 22:21:22'
		),
		array(
			'id' => '743',
			'role_id' => '11',
			'hero_id' => '70',
			'level' => '5',
			'created' => '2014-09-08 22:21:27',
			'modified' => '2014-09-08 22:21:27'
		),
		array(
			'id' => '744',
			'role_id' => '2',
			'hero_id' => '72',
			'level' => '0',
			'created' => '2014-09-08 22:21:34',
			'modified' => '2014-09-08 22:21:34'
		),
		array(
			'id' => '745',
			'role_id' => '3',
			'hero_id' => '72',
			'level' => '1',
			'created' => '2014-09-08 22:21:37',
			'modified' => '2014-09-08 22:21:37'
		),
		array(
			'id' => '746',
			'role_id' => '4',
			'hero_id' => '72',
			'level' => '0',
			'created' => '2014-09-08 22:21:41',
			'modified' => '2014-09-08 22:21:41'
		),
		array(
			'id' => '747',
			'role_id' => '5',
			'hero_id' => '72',
			'level' => '0',
			'created' => '2014-09-08 22:21:46',
			'modified' => '2014-09-08 22:21:46'
		),
		array(
			'id' => '748',
			'role_id' => '6',
			'hero_id' => '72',
			'level' => '1',
			'created' => '2014-09-08 22:21:51',
			'modified' => '2014-09-08 22:21:51'
		),
		array(
			'id' => '749',
			'role_id' => '7',
			'hero_id' => '72',
			'level' => '10',
			'created' => '2014-09-08 22:21:59',
			'modified' => '2014-09-08 22:21:59'
		),
		array(
			'id' => '750',
			'role_id' => '8',
			'hero_id' => '72',
			'level' => '1',
			'created' => '2014-09-08 22:22:02',
			'modified' => '2014-09-08 22:22:11'
		),
		array(
			'id' => '751',
			'role_id' => '9',
			'hero_id' => '72',
			'level' => '0',
			'created' => '2014-09-08 22:22:22',
			'modified' => '2014-09-08 22:22:22'
		),
		array(
			'id' => '752',
			'role_id' => '10',
			'hero_id' => '72',
			'level' => '0',
			'created' => '2014-09-08 22:22:24',
			'modified' => '2014-09-08 22:22:24'
		),
		array(
			'id' => '753',
			'role_id' => '11',
			'hero_id' => '72',
			'level' => '1',
			'created' => '2014-09-08 22:22:29',
			'modified' => '2014-09-08 22:22:29'
		),
		array(
			'id' => '754',
			'role_id' => '2',
			'hero_id' => '74',
			'level' => '1',
			'created' => '2014-09-08 22:22:40',
			'modified' => '2014-09-08 22:22:40'
		),
		array(
			'id' => '755',
			'role_id' => '3',
			'hero_id' => '74',
			'level' => '0',
			'created' => '2014-09-08 22:22:46',
			'modified' => '2014-09-08 22:22:46'
		),
		array(
			'id' => '756',
			'role_id' => '4',
			'hero_id' => '74',
			'level' => '0',
			'created' => '2014-09-08 22:22:49',
			'modified' => '2014-09-08 22:22:49'
		),
		array(
			'id' => '757',
			'role_id' => '5',
			'hero_id' => '74',
			'level' => '0',
			'created' => '2014-09-08 22:22:51',
			'modified' => '2014-09-08 22:22:51'
		),
		array(
			'id' => '758',
			'role_id' => '6',
			'hero_id' => '74',
			'level' => '5',
			'created' => '2014-09-08 22:22:59',
			'modified' => '2014-09-08 22:22:59'
		),
		array(
			'id' => '759',
			'role_id' => '7',
			'hero_id' => '74',
			'level' => '10',
			'created' => '2014-09-08 22:23:04',
			'modified' => '2014-09-08 22:23:04'
		),
		array(
			'id' => '760',
			'role_id' => '8',
			'hero_id' => '74',
			'level' => '1',
			'created' => '2014-09-08 22:23:08',
			'modified' => '2014-09-08 22:23:08'
		),
		array(
			'id' => '761',
			'role_id' => '9',
			'hero_id' => '74',
			'level' => '0',
			'created' => '2014-09-08 22:23:12',
			'modified' => '2014-09-08 22:23:12'
		),
		array(
			'id' => '762',
			'role_id' => '10',
			'hero_id' => '74',
			'level' => '0',
			'created' => '2014-09-08 22:23:16',
			'modified' => '2014-09-08 22:23:16'
		),
		array(
			'id' => '763',
			'role_id' => '11',
			'hero_id' => '74',
			'level' => '5',
			'created' => '2014-09-08 22:23:21',
			'modified' => '2014-09-08 22:23:21'
		),
		array(
			'id' => '764',
			'role_id' => '2',
			'hero_id' => '75',
			'level' => '10',
			'created' => '2014-09-08 22:23:53',
			'modified' => '2014-09-08 22:23:53'
		),
		array(
			'id' => '765',
			'role_id' => '3',
			'hero_id' => '75',
			'level' => '1',
			'created' => '2014-09-08 22:23:57',
			'modified' => '2014-09-08 22:23:57'
		),
		array(
			'id' => '766',
			'role_id' => '4',
			'hero_id' => '75',
			'level' => '0',
			'created' => '2014-09-08 22:24:02',
			'modified' => '2014-09-08 22:24:02'
		),
		array(
			'id' => '767',
			'role_id' => '5',
			'hero_id' => '75',
			'level' => '0',
			'created' => '2014-09-08 22:24:07',
			'modified' => '2014-09-08 22:24:07'
		),
		array(
			'id' => '768',
			'role_id' => '6',
			'hero_id' => '75',
			'level' => '10',
			'created' => '2014-09-08 22:24:11',
			'modified' => '2014-09-08 22:24:11'
		),
		array(
			'id' => '769',
			'role_id' => '7',
			'hero_id' => '75',
			'level' => '1',
			'created' => '2014-09-08 22:24:15',
			'modified' => '2014-09-08 22:24:15'
		),
		array(
			'id' => '770',
			'role_id' => '8',
			'hero_id' => '75',
			'level' => '5',
			'created' => '2014-09-08 22:24:19',
			'modified' => '2014-09-08 22:24:19'
		),
		array(
			'id' => '771',
			'role_id' => '9',
			'hero_id' => '75',
			'level' => '0',
			'created' => '2014-09-08 22:24:25',
			'modified' => '2014-09-08 22:24:25'
		),
		array(
			'id' => '772',
			'role_id' => '10',
			'hero_id' => '75',
			'level' => '0',
			'created' => '2014-09-08 22:24:29',
			'modified' => '2014-09-08 22:24:29'
		),
		array(
			'id' => '773',
			'role_id' => '11',
			'hero_id' => '75',
			'level' => '10',
			'created' => '2014-09-08 22:24:34',
			'modified' => '2014-09-08 22:24:34'
		),
		array(
			'id' => '774',
			'role_id' => '2',
			'hero_id' => '77',
			'level' => '0',
			'created' => '2014-09-08 22:25:48',
			'modified' => '2014-09-08 22:25:48'
		),
		array(
			'id' => '775',
			'role_id' => '3',
			'hero_id' => '77',
			'level' => '1',
			'created' => '2014-09-08 22:25:52',
			'modified' => '2014-09-08 22:25:52'
		),
		array(
			'id' => '776',
			'role_id' => '4',
			'hero_id' => '77',
			'level' => '0',
			'created' => '2014-09-08 22:25:57',
			'modified' => '2014-09-08 22:25:57'
		),
		array(
			'id' => '777',
			'role_id' => '5',
			'hero_id' => '77',
			'level' => '1',
			'created' => '2014-09-08 22:26:01',
			'modified' => '2014-09-08 22:26:01'
		),
		array(
			'id' => '778',
			'role_id' => '6',
			'hero_id' => '77',
			'level' => '10',
			'created' => '2014-09-08 22:26:05',
			'modified' => '2014-09-08 22:26:05'
		),
		array(
			'id' => '779',
			'role_id' => '7',
			'hero_id' => '77',
			'level' => '10',
			'created' => '2014-09-08 22:26:09',
			'modified' => '2014-09-08 22:26:09'
		),
		array(
			'id' => '780',
			'role_id' => '8',
			'hero_id' => '77',
			'level' => '0',
			'created' => '2014-09-08 22:26:13',
			'modified' => '2014-09-08 22:26:13'
		),
		array(
			'id' => '781',
			'role_id' => '9',
			'hero_id' => '77',
			'level' => '0',
			'created' => '2014-09-08 22:26:17',
			'modified' => '2014-09-08 22:26:17'
		),
		array(
			'id' => '782',
			'role_id' => '10',
			'hero_id' => '77',
			'level' => '5',
			'created' => '2014-09-08 22:26:21',
			'modified' => '2014-09-08 22:26:21'
		),
		array(
			'id' => '783',
			'role_id' => '11',
			'hero_id' => '77',
			'level' => '0',
			'created' => '2014-09-08 22:26:25',
			'modified' => '2014-09-08 22:26:25'
		),
		array(
			'id' => '784',
			'role_id' => '2',
			'hero_id' => '80',
			'level' => '1',
			'created' => '2014-09-08 22:26:33',
			'modified' => '2014-09-08 22:26:33'
		),
		array(
			'id' => '785',
			'role_id' => '3',
			'hero_id' => '80',
			'level' => '0',
			'created' => '2014-09-08 22:26:38',
			'modified' => '2014-09-08 22:26:38'
		),
		array(
			'id' => '786',
			'role_id' => '4',
			'hero_id' => '80',
			'level' => '0',
			'created' => '2014-09-08 22:26:41',
			'modified' => '2014-09-08 22:26:41'
		),
		array(
			'id' => '787',
			'role_id' => '5',
			'hero_id' => '80',
			'level' => '5',
			'created' => '2014-09-08 22:26:45',
			'modified' => '2014-09-08 22:26:45'
		),
		array(
			'id' => '788',
			'role_id' => '6',
			'hero_id' => '80',
			'level' => '10',
			'created' => '2014-09-08 22:26:50',
			'modified' => '2014-09-08 22:26:50'
		),
		array(
			'id' => '789',
			'role_id' => '7',
			'hero_id' => '80',
			'level' => '1',
			'created' => '2014-09-08 22:26:54',
			'modified' => '2014-09-08 22:26:54'
		),
		array(
			'id' => '790',
			'role_id' => '8',
			'hero_id' => '80',
			'level' => '0',
			'created' => '2014-09-08 22:26:59',
			'modified' => '2014-09-08 22:26:59'
		),
		array(
			'id' => '791',
			'role_id' => '9',
			'hero_id' => '80',
			'level' => '1',
			'created' => '2014-09-08 22:27:04',
			'modified' => '2014-09-08 22:27:04'
		),
		array(
			'id' => '792',
			'role_id' => '10',
			'hero_id' => '80',
			'level' => '5',
			'created' => '2014-09-08 22:27:08',
			'modified' => '2014-09-08 22:27:08'
		),
		array(
			'id' => '793',
			'role_id' => '11',
			'hero_id' => '80',
			'level' => '0',
			'created' => '2014-09-08 22:27:12',
			'modified' => '2014-09-08 22:27:12'
		),
		array(
			'id' => '794',
			'role_id' => '2',
			'hero_id' => '81',
			'level' => '1',
			'created' => '2014-09-08 22:27:22',
			'modified' => '2014-09-08 22:27:22'
		),
		array(
			'id' => '795',
			'role_id' => '3',
			'hero_id' => '81',
			'level' => '0',
			'created' => '2014-09-08 22:27:26',
			'modified' => '2014-09-08 22:27:26'
		),
		array(
			'id' => '796',
			'role_id' => '4',
			'hero_id' => '81',
			'level' => '1',
			'created' => '2014-09-08 22:27:30',
			'modified' => '2014-09-08 22:27:30'
		),
		array(
			'id' => '797',
			'role_id' => '5',
			'hero_id' => '81',
			'level' => '10',
			'created' => '2014-09-08 22:27:35',
			'modified' => '2014-09-08 22:27:35'
		),
		array(
			'id' => '798',
			'role_id' => '6',
			'hero_id' => '81',
			'level' => '10',
			'created' => '2014-09-08 22:27:38',
			'modified' => '2014-09-08 22:27:38'
		),
		array(
			'id' => '799',
			'role_id' => '7',
			'hero_id' => '81',
			'level' => '1',
			'created' => '2014-09-08 22:27:42',
			'modified' => '2014-09-08 22:27:42'
		),
		array(
			'id' => '800',
			'role_id' => '8',
			'hero_id' => '81',
			'level' => '5',
			'created' => '2014-09-08 22:27:46',
			'modified' => '2014-09-08 22:27:46'
		),
		array(
			'id' => '801',
			'role_id' => '9',
			'hero_id' => '81',
			'level' => '0',
			'created' => '2014-09-08 22:27:52',
			'modified' => '2014-09-08 22:27:52'
		),
		array(
			'id' => '802',
			'role_id' => '10',
			'hero_id' => '81',
			'level' => '5',
			'created' => '2014-09-08 22:27:57',
			'modified' => '2014-09-08 22:27:57'
		),
		array(
			'id' => '803',
			'role_id' => '11',
			'hero_id' => '81',
			'level' => '5',
			'created' => '2014-09-08 22:28:00',
			'modified' => '2014-09-08 22:28:00'
		),
		array(
			'id' => '804',
			'role_id' => '2',
			'hero_id' => '83',
			'level' => '1',
			'created' => '2014-09-08 22:28:11',
			'modified' => '2014-09-08 22:28:11'
		),
		array(
			'id' => '805',
			'role_id' => '3',
			'hero_id' => '83',
			'level' => '0',
			'created' => '2014-09-08 22:28:16',
			'modified' => '2014-09-08 22:28:16'
		),
		array(
			'id' => '806',
			'role_id' => '4',
			'hero_id' => '83',
			'level' => '1',
			'created' => '2014-09-08 22:28:19',
			'modified' => '2014-09-08 22:28:19'
		),
		array(
			'id' => '807',
			'role_id' => '5',
			'hero_id' => '83',
			'level' => '0',
			'created' => '2014-09-08 22:28:24',
			'modified' => '2014-09-08 22:28:24'
		),
		array(
			'id' => '808',
			'role_id' => '6',
			'hero_id' => '83',
			'level' => '5',
			'created' => '2014-09-08 22:28:29',
			'modified' => '2014-09-08 22:28:29'
		),
		array(
			'id' => '809',
			'role_id' => '7',
			'hero_id' => '83',
			'level' => '5',
			'created' => '2014-09-08 22:28:34',
			'modified' => '2014-09-08 22:28:34'
		),
		array(
			'id' => '810',
			'role_id' => '8',
			'hero_id' => '83',
			'level' => '5',
			'created' => '2014-09-08 22:28:39',
			'modified' => '2014-09-08 22:28:39'
		),
		array(
			'id' => '811',
			'role_id' => '9',
			'hero_id' => '83',
			'level' => '0',
			'created' => '2014-09-08 22:28:45',
			'modified' => '2014-09-08 22:28:45'
		),
		array(
			'id' => '812',
			'role_id' => '10',
			'hero_id' => '83',
			'level' => '0',
			'created' => '2014-09-08 22:28:49',
			'modified' => '2014-09-08 22:28:49'
		),
		array(
			'id' => '813',
			'role_id' => '11',
			'hero_id' => '83',
			'level' => '10',
			'created' => '2014-09-08 22:28:53',
			'modified' => '2014-09-08 22:28:53'
		),
		array(
			'id' => '814',
			'role_id' => '2',
			'hero_id' => '85',
			'level' => '1',
			'created' => '2014-09-08 22:29:11',
			'modified' => '2014-09-08 22:29:11'
		),
		array(
			'id' => '815',
			'role_id' => '3',
			'hero_id' => '85',
			'level' => '0',
			'created' => '2014-09-08 22:29:26',
			'modified' => '2014-09-08 22:29:26'
		),
		array(
			'id' => '816',
			'role_id' => '4',
			'hero_id' => '85',
			'level' => '0',
			'created' => '2014-09-08 22:29:32',
			'modified' => '2014-09-08 22:29:32'
		),
		array(
			'id' => '817',
			'role_id' => '5',
			'hero_id' => '85',
			'level' => '10',
			'created' => '2014-09-08 22:29:36',
			'modified' => '2014-09-08 22:29:36'
		),
		array(
			'id' => '818',
			'role_id' => '6',
			'hero_id' => '85',
			'level' => '10',
			'created' => '2014-09-08 22:29:40',
			'modified' => '2014-09-08 22:29:40'
		),
		array(
			'id' => '819',
			'role_id' => '7',
			'hero_id' => '85',
			'level' => '1',
			'created' => '2014-09-08 22:29:46',
			'modified' => '2014-09-08 22:29:46'
		),
		array(
			'id' => '820',
			'role_id' => '8',
			'hero_id' => '85',
			'level' => '0',
			'created' => '2014-09-08 22:29:50',
			'modified' => '2014-09-08 22:29:50'
		),
		array(
			'id' => '821',
			'role_id' => '9',
			'hero_id' => '85',
			'level' => '0',
			'created' => '2014-09-08 22:29:54',
			'modified' => '2014-09-08 22:29:54'
		),
		array(
			'id' => '822',
			'role_id' => '10',
			'hero_id' => '85',
			'level' => '0',
			'created' => '2014-09-08 22:30:00',
			'modified' => '2014-09-08 22:30:00'
		),
		array(
			'id' => '823',
			'role_id' => '11',
			'hero_id' => '85',
			'level' => '10',
			'created' => '2014-09-08 22:30:05',
			'modified' => '2014-09-08 22:30:05'
		),
		array(
			'id' => '824',
			'role_id' => '2',
			'hero_id' => '87',
			'level' => '5',
			'created' => '2014-09-08 22:30:15',
			'modified' => '2014-09-08 22:30:15'
		),
		array(
			'id' => '825',
			'role_id' => '3',
			'hero_id' => '87',
			'level' => '5',
			'created' => '2014-09-08 22:30:19',
			'modified' => '2014-09-08 22:30:19'
		),
		array(
			'id' => '826',
			'role_id' => '4',
			'hero_id' => '87',
			'level' => '0',
			'created' => '2014-09-08 22:30:23',
			'modified' => '2014-09-08 22:30:23'
		),
		array(
			'id' => '827',
			'role_id' => '5',
			'hero_id' => '87',
			'level' => '0',
			'created' => '2014-09-08 22:30:27',
			'modified' => '2014-09-08 22:30:27'
		),
		array(
			'id' => '828',
			'role_id' => '6',
			'hero_id' => '87',
			'level' => '0',
			'created' => '2014-09-08 22:30:30',
			'modified' => '2014-09-08 22:30:30'
		),
		array(
			'id' => '829',
			'role_id' => '7',
			'hero_id' => '87',
			'level' => '0',
			'created' => '2014-09-08 22:30:33',
			'modified' => '2014-09-08 22:30:33'
		),
		array(
			'id' => '830',
			'role_id' => '8',
			'hero_id' => '87',
			'level' => '1',
			'created' => '2014-09-08 22:30:38',
			'modified' => '2014-09-08 22:30:38'
		),
		array(
			'id' => '831',
			'role_id' => '9',
			'hero_id' => '87',
			'level' => '0',
			'created' => '2014-09-08 22:30:43',
			'modified' => '2014-09-08 22:30:43'
		),
		array(
			'id' => '832',
			'role_id' => '10',
			'hero_id' => '87',
			'level' => '1',
			'created' => '2014-09-08 22:30:47',
			'modified' => '2014-09-08 22:30:47'
		),
		array(
			'id' => '833',
			'role_id' => '11',
			'hero_id' => '87',
			'level' => '5',
			'created' => '2014-09-08 22:30:52',
			'modified' => '2014-09-08 22:30:52'
		),
		array(
			'id' => '834',
			'role_id' => '2',
			'hero_id' => '89',
			'level' => '5',
			'created' => '2014-09-08 22:31:02',
			'modified' => '2014-09-08 22:31:02'
		),
		array(
			'id' => '835',
			'role_id' => '3',
			'hero_id' => '89',
			'level' => '1',
			'created' => '2014-09-08 22:31:07',
			'modified' => '2014-09-08 22:31:07'
		),
		array(
			'id' => '836',
			'role_id' => '4',
			'hero_id' => '89',
			'level' => '1',
			'created' => '2014-09-08 22:31:11',
			'modified' => '2014-09-08 22:31:11'
		),
		array(
			'id' => '837',
			'role_id' => '5',
			'hero_id' => '89',
			'level' => '0',
			'created' => '2014-09-08 22:31:14',
			'modified' => '2014-09-08 22:31:14'
		),
		array(
			'id' => '838',
			'role_id' => '6',
			'hero_id' => '89',
			'level' => '0',
			'created' => '2014-09-08 22:31:19',
			'modified' => '2014-09-08 22:31:19'
		),
		array(
			'id' => '839',
			'role_id' => '7',
			'hero_id' => '89',
			'level' => '10',
			'created' => '2014-09-08 22:31:23',
			'modified' => '2014-09-08 22:31:23'
		),
		array(
			'id' => '840',
			'role_id' => '8',
			'hero_id' => '89',
			'level' => '1',
			'created' => '2014-09-08 22:31:27',
			'modified' => '2014-09-08 22:31:27'
		),
		array(
			'id' => '841',
			'role_id' => '9',
			'hero_id' => '89',
			'level' => '0',
			'created' => '2014-09-08 22:31:45',
			'modified' => '2014-09-08 22:31:45'
		),
		array(
			'id' => '842',
			'role_id' => '10',
			'hero_id' => '89',
			'level' => '0',
			'created' => '2014-09-08 22:31:49',
			'modified' => '2014-09-08 22:31:49'
		),
		array(
			'id' => '843',
			'role_id' => '11',
			'hero_id' => '89',
			'level' => '10',
			'created' => '2014-09-08 22:31:53',
			'modified' => '2014-09-08 22:31:53'
		),
		array(
			'id' => '844',
			'role_id' => '2',
			'hero_id' => '91',
			'level' => '5',
			'created' => '2014-09-08 22:32:15',
			'modified' => '2014-09-08 22:32:15'
		),
		array(
			'id' => '845',
			'role_id' => '3',
			'hero_id' => '91',
			'level' => '1',
			'created' => '2014-09-08 22:32:18',
			'modified' => '2014-09-08 22:32:18'
		),
		array(
			'id' => '846',
			'role_id' => '4',
			'hero_id' => '91',
			'level' => '0',
			'created' => '2014-09-08 22:32:22',
			'modified' => '2014-09-08 22:32:22'
		),
		array(
			'id' => '847',
			'role_id' => '5',
			'hero_id' => '91',
			'level' => '0',
			'created' => '2014-09-08 22:32:26',
			'modified' => '2014-09-08 22:32:26'
		),
		array(
			'id' => '848',
			'role_id' => '6',
			'hero_id' => '91',
			'level' => '0',
			'created' => '2014-09-08 22:32:30',
			'modified' => '2014-09-08 22:32:30'
		),
		array(
			'id' => '849',
			'role_id' => '7',
			'hero_id' => '91',
			'level' => '5',
			'created' => '2014-09-08 22:32:44',
			'modified' => '2014-09-08 22:32:44'
		),
		array(
			'id' => '850',
			'role_id' => '8',
			'hero_id' => '91',
			'level' => '10',
			'created' => '2014-09-08 22:32:49',
			'modified' => '2014-09-08 22:32:49'
		),
		array(
			'id' => '851',
			'role_id' => '9',
			'hero_id' => '91',
			'level' => '0',
			'created' => '2014-09-08 22:32:53',
			'modified' => '2014-09-08 22:32:53'
		),
		array(
			'id' => '852',
			'role_id' => '10',
			'hero_id' => '91',
			'level' => '0',
			'created' => '2014-09-08 22:32:56',
			'modified' => '2014-09-08 22:32:56'
		),
		array(
			'id' => '853',
			'role_id' => '11',
			'hero_id' => '91',
			'level' => '10',
			'created' => '2014-09-08 22:33:01',
			'modified' => '2014-09-08 22:33:01'
		),
		array(
			'id' => '854',
			'role_id' => '2',
			'hero_id' => '93',
			'level' => '5',
			'created' => '2014-09-08 22:33:10',
			'modified' => '2014-09-08 22:33:10'
		),
		array(
			'id' => '855',
			'role_id' => '3',
			'hero_id' => '93',
			'level' => '5',
			'created' => '2014-09-08 22:33:13',
			'modified' => '2014-09-08 22:33:13'
		),
		array(
			'id' => '856',
			'role_id' => '4',
			'hero_id' => '93',
			'level' => '0',
			'created' => '2014-09-08 22:33:18',
			'modified' => '2014-09-08 22:33:18'
		),
		array(
			'id' => '857',
			'role_id' => '5',
			'hero_id' => '93',
			'level' => '0',
			'created' => '2014-09-08 22:33:23',
			'modified' => '2014-09-08 22:33:23'
		),
		array(
			'id' => '858',
			'role_id' => '6',
			'hero_id' => '93',
			'level' => '0',
			'created' => '2014-09-08 22:33:27',
			'modified' => '2014-09-08 22:33:27'
		),
		array(
			'id' => '859',
			'role_id' => '7',
			'hero_id' => '93',
			'level' => '5',
			'created' => '2014-09-08 22:33:44',
			'modified' => '2014-09-08 22:33:44'
		),
		array(
			'id' => '860',
			'role_id' => '8',
			'hero_id' => '93',
			'level' => '5',
			'created' => '2014-09-08 22:33:47',
			'modified' => '2014-09-08 22:33:47'
		),
		array(
			'id' => '861',
			'role_id' => '9',
			'hero_id' => '93',
			'level' => '0',
			'created' => '2014-09-08 22:33:51',
			'modified' => '2014-09-08 22:33:51'
		),
		array(
			'id' => '862',
			'role_id' => '10',
			'hero_id' => '93',
			'level' => '0',
			'created' => '2014-09-08 22:33:54',
			'modified' => '2014-09-08 22:33:54'
		),
		array(
			'id' => '863',
			'role_id' => '11',
			'hero_id' => '93',
			'level' => '5',
			'created' => '2014-09-08 22:33:58',
			'modified' => '2014-09-08 22:33:58'
		),
		array(
			'id' => '864',
			'role_id' => '2',
			'hero_id' => '95',
			'level' => '1',
			'created' => '2014-09-08 22:34:09',
			'modified' => '2014-09-08 22:34:09'
		),
		array(
			'id' => '865',
			'role_id' => '3',
			'hero_id' => '95',
			'level' => '0',
			'created' => '2014-09-08 22:34:13',
			'modified' => '2014-09-08 22:34:13'
		),
		array(
			'id' => '866',
			'role_id' => '4',
			'hero_id' => '95',
			'level' => '0',
			'created' => '2014-09-08 22:34:17',
			'modified' => '2014-09-08 22:34:17'
		),
		array(
			'id' => '867',
			'role_id' => '5',
			'hero_id' => '95',
			'level' => '0',
			'created' => '2014-09-08 22:34:20',
			'modified' => '2014-09-08 22:34:20'
		),
		array(
			'id' => '868',
			'role_id' => '6',
			'hero_id' => '95',
			'level' => '10',
			'created' => '2014-09-08 22:34:25',
			'modified' => '2014-09-08 22:34:25'
		),
		array(
			'id' => '869',
			'role_id' => '7',
			'hero_id' => '95',
			'level' => '5',
			'created' => '2014-09-08 22:34:29',
			'modified' => '2014-09-08 22:34:29'
		),
		array(
			'id' => '870',
			'role_id' => '8',
			'hero_id' => '95',
			'level' => '10',
			'created' => '2014-09-08 22:34:34',
			'modified' => '2014-09-08 22:34:34'
		),
		array(
			'id' => '871',
			'role_id' => '9',
			'hero_id' => '95',
			'level' => '0',
			'created' => '2014-09-08 22:34:38',
			'modified' => '2014-09-08 22:34:38'
		),
		array(
			'id' => '872',
			'role_id' => '10',
			'hero_id' => '95',
			'level' => '0',
			'created' => '2014-09-08 22:34:42',
			'modified' => '2014-09-08 22:34:42'
		),
		array(
			'id' => '873',
			'role_id' => '11',
			'hero_id' => '95',
			'level' => '10',
			'created' => '2014-09-08 22:34:46',
			'modified' => '2014-09-08 22:34:46'
		),
		array(
			'id' => '874',
			'role_id' => '2',
			'hero_id' => '97',
			'level' => '1',
			'created' => '2014-09-08 22:35:02',
			'modified' => '2014-09-08 22:35:02'
		),
		array(
			'id' => '875',
			'role_id' => '3',
			'hero_id' => '97',
			'level' => '0',
			'created' => '2014-09-08 22:35:06',
			'modified' => '2014-09-08 22:35:06'
		),
		array(
			'id' => '876',
			'role_id' => '4',
			'hero_id' => '97',
			'level' => '0',
			'created' => '2014-09-08 22:35:09',
			'modified' => '2014-09-08 22:35:09'
		),
		array(
			'id' => '877',
			'role_id' => '5',
			'hero_id' => '97',
			'level' => '0',
			'created' => '2014-09-08 22:35:12',
			'modified' => '2014-09-08 22:35:12'
		),
		array(
			'id' => '878',
			'role_id' => '6',
			'hero_id' => '97',
			'level' => '0',
			'created' => '2014-09-08 22:35:19',
			'modified' => '2014-09-08 22:35:19'
		),
		array(
			'id' => '879',
			'role_id' => '7',
			'hero_id' => '97',
			'level' => '10',
			'created' => '2014-09-08 22:35:24',
			'modified' => '2014-09-08 22:35:24'
		),
		array(
			'id' => '880',
			'role_id' => '8',
			'hero_id' => '97',
			'level' => '5',
			'created' => '2014-09-08 22:35:30',
			'modified' => '2014-09-08 22:35:30'
		),
		array(
			'id' => '881',
			'role_id' => '9',
			'hero_id' => '97',
			'level' => '0',
			'created' => '2014-09-08 22:35:37',
			'modified' => '2014-09-08 22:35:37'
		),
		array(
			'id' => '882',
			'role_id' => '10',
			'hero_id' => '97',
			'level' => '1',
			'created' => '2014-09-08 22:35:41',
			'modified' => '2014-09-08 22:35:41'
		),
		array(
			'id' => '883',
			'role_id' => '11',
			'hero_id' => '97',
			'level' => '5',
			'created' => '2014-09-08 22:35:45',
			'modified' => '2014-09-08 22:35:45'
		),
		array(
			'id' => '884',
			'role_id' => '2',
			'hero_id' => '79',
			'level' => '10',
			'created' => '2014-09-08 22:37:18',
			'modified' => '2014-09-08 22:37:18'
		),
		array(
			'id' => '885',
			'role_id' => '3',
			'hero_id' => '79',
			'level' => '0',
			'created' => '2014-09-08 22:37:23',
			'modified' => '2014-09-08 22:37:23'
		),
		array(
			'id' => '886',
			'role_id' => '4',
			'hero_id' => '79',
			'level' => '0',
			'created' => '2014-09-08 22:37:26',
			'modified' => '2014-09-08 22:37:26'
		),
		array(
			'id' => '887',
			'role_id' => '5',
			'hero_id' => '79',
			'level' => '0',
			'created' => '2014-09-08 22:37:29',
			'modified' => '2014-09-08 22:37:29'
		),
		array(
			'id' => '888',
			'role_id' => '6',
			'hero_id' => '79',
			'level' => '0',
			'created' => '2014-09-08 22:37:33',
			'modified' => '2014-09-08 22:37:33'
		),
		array(
			'id' => '889',
			'role_id' => '7',
			'hero_id' => '79',
			'level' => '5',
			'created' => '2014-09-08 22:37:37',
			'modified' => '2014-09-08 22:37:37'
		),
		array(
			'id' => '890',
			'role_id' => '8',
			'hero_id' => '79',
			'level' => '10',
			'created' => '2014-09-08 22:37:43',
			'modified' => '2014-09-08 22:37:43'
		),
		array(
			'id' => '891',
			'role_id' => '9',
			'hero_id' => '79',
			'level' => '0',
			'created' => '2014-09-08 22:37:48',
			'modified' => '2014-09-08 22:37:48'
		),
		array(
			'id' => '892',
			'role_id' => '10',
			'hero_id' => '79',
			'level' => '0',
			'created' => '2014-09-08 22:37:52',
			'modified' => '2014-09-08 22:37:52'
		),
		array(
			'id' => '893',
			'role_id' => '11',
			'hero_id' => '79',
			'level' => '10',
			'created' => '2014-09-08 22:37:56',
			'modified' => '2014-09-08 22:37:56'
		),
		array(
			'id' => '894',
			'role_id' => '2',
			'hero_id' => '82',
			'level' => '0',
			'created' => '2014-09-08 22:38:06',
			'modified' => '2014-09-08 22:38:06'
		),
		array(
			'id' => '895',
			'role_id' => '3',
			'hero_id' => '82',
			'level' => '0',
			'created' => '2014-09-08 22:38:09',
			'modified' => '2014-09-08 22:38:09'
		),
		array(
			'id' => '896',
			'role_id' => '4',
			'hero_id' => '82',
			'level' => '0',
			'created' => '2014-09-08 22:38:11',
			'modified' => '2014-09-08 22:38:11'
		),
		array(
			'id' => '897',
			'role_id' => '5',
			'hero_id' => '82',
			'level' => '0',
			'created' => '2014-09-08 22:38:15',
			'modified' => '2014-09-08 22:38:15'
		),
		array(
			'id' => '898',
			'role_id' => '6',
			'hero_id' => '82',
			'level' => '1',
			'created' => '2014-09-08 22:38:18',
			'modified' => '2014-09-08 22:38:18'
		),
		array(
			'id' => '899',
			'role_id' => '7',
			'hero_id' => '82',
			'level' => '10',
			'created' => '2014-09-08 22:38:22',
			'modified' => '2014-09-08 22:38:22'
		),
		array(
			'id' => '900',
			'role_id' => '8',
			'hero_id' => '82',
			'level' => '10',
			'created' => '2014-09-08 22:38:25',
			'modified' => '2014-09-08 22:38:25'
		),
		array(
			'id' => '901',
			'role_id' => '9',
			'hero_id' => '82',
			'level' => '0',
			'created' => '2014-09-08 22:38:28',
			'modified' => '2014-09-08 22:38:28'
		),
		array(
			'id' => '902',
			'role_id' => '10',
			'hero_id' => '82',
			'level' => '0',
			'created' => '2014-09-08 22:38:31',
			'modified' => '2014-09-08 22:38:31'
		),
		array(
			'id' => '903',
			'role_id' => '11',
			'hero_id' => '82',
			'level' => '10',
			'created' => '2014-09-08 22:38:36',
			'modified' => '2014-09-08 22:38:36'
		),
		array(
			'id' => '904',
			'role_id' => '2',
			'hero_id' => '84',
			'level' => '10',
			'created' => '2014-09-08 22:38:42',
			'modified' => '2014-09-08 22:38:42'
		),
		array(
			'id' => '905',
			'role_id' => '3',
			'hero_id' => '84',
			'level' => '0',
			'created' => '2014-09-08 22:38:51',
			'modified' => '2014-09-08 22:38:51'
		),
		array(
			'id' => '906',
			'role_id' => '4',
			'hero_id' => '84',
			'level' => '0',
			'created' => '2014-09-08 22:38:55',
			'modified' => '2014-09-08 22:38:55'
		),
		array(
			'id' => '907',
			'role_id' => '5',
			'hero_id' => '84',
			'level' => '0',
			'created' => '2014-09-08 22:38:59',
			'modified' => '2014-09-08 22:38:59'
		),
		array(
			'id' => '908',
			'role_id' => '6',
			'hero_id' => '84',
			'level' => '1',
			'created' => '2014-09-08 22:39:02',
			'modified' => '2014-09-08 22:39:02'
		),
		array(
			'id' => '909',
			'role_id' => '7',
			'hero_id' => '84',
			'level' => '10',
			'created' => '2014-09-08 22:39:06',
			'modified' => '2014-09-08 22:39:06'
		),
		array(
			'id' => '910',
			'role_id' => '8',
			'hero_id' => '84',
			'level' => '1',
			'created' => '2014-09-08 22:39:10',
			'modified' => '2014-09-08 22:39:10'
		),
		array(
			'id' => '911',
			'role_id' => '9',
			'hero_id' => '84',
			'level' => '0',
			'created' => '2014-09-08 22:39:14',
			'modified' => '2014-09-08 22:39:14'
		),
		array(
			'id' => '912',
			'role_id' => '10',
			'hero_id' => '84',
			'level' => '0',
			'created' => '2014-09-08 22:39:17',
			'modified' => '2014-09-08 22:39:17'
		),
		array(
			'id' => '913',
			'role_id' => '11',
			'hero_id' => '84',
			'level' => '5',
			'created' => '2014-09-08 22:39:22',
			'modified' => '2014-09-08 22:39:22'
		),
		array(
			'id' => '914',
			'role_id' => '2',
			'hero_id' => '86',
			'level' => '1',
			'created' => '2014-09-08 22:39:29',
			'modified' => '2014-09-08 22:39:29'
		),
		array(
			'id' => '915',
			'role_id' => '3',
			'hero_id' => '86',
			'level' => '1',
			'created' => '2014-09-08 22:39:33',
			'modified' => '2014-09-08 22:39:33'
		),
		array(
			'id' => '916',
			'role_id' => '4',
			'hero_id' => '86',
			'level' => '0',
			'created' => '2014-09-08 22:39:36',
			'modified' => '2014-09-08 22:39:36'
		),
		array(
			'id' => '917',
			'role_id' => '5',
			'hero_id' => '86',
			'level' => '0',
			'created' => '2014-09-08 22:39:39',
			'modified' => '2014-09-08 22:39:39'
		),
		array(
			'id' => '918',
			'role_id' => '6',
			'hero_id' => '86',
			'level' => '1',
			'created' => '2014-09-08 22:39:43',
			'modified' => '2014-09-08 22:39:43'
		),
		array(
			'id' => '919',
			'role_id' => '7',
			'hero_id' => '86',
			'level' => '5',
			'created' => '2014-09-08 22:39:47',
			'modified' => '2014-09-08 22:39:47'
		),
		array(
			'id' => '920',
			'role_id' => '8',
			'hero_id' => '86',
			'level' => '5',
			'created' => '2014-09-08 22:39:51',
			'modified' => '2014-09-08 22:39:51'
		),
		array(
			'id' => '921',
			'role_id' => '9',
			'hero_id' => '86',
			'level' => '0',
			'created' => '2014-09-08 22:39:56',
			'modified' => '2014-09-08 22:39:56'
		),
		array(
			'id' => '922',
			'role_id' => '10',
			'hero_id' => '86',
			'level' => '0',
			'created' => '2014-09-08 22:40:00',
			'modified' => '2014-09-08 22:40:00'
		),
		array(
			'id' => '923',
			'role_id' => '11',
			'hero_id' => '86',
			'level' => '5',
			'created' => '2014-09-08 22:40:04',
			'modified' => '2014-09-08 22:40:04'
		),
		array(
			'id' => '924',
			'role_id' => '2',
			'hero_id' => '88',
			'level' => '10',
			'created' => '2014-09-08 22:40:17',
			'modified' => '2014-09-08 22:40:17'
		),
		array(
			'id' => '925',
			'role_id' => '3',
			'hero_id' => '88',
			'level' => '10',
			'created' => '2014-09-08 22:40:21',
			'modified' => '2014-09-08 22:40:21'
		),
		array(
			'id' => '926',
			'role_id' => '4',
			'hero_id' => '88',
			'level' => '0',
			'created' => '2014-09-08 22:40:25',
			'modified' => '2014-09-08 22:40:25'
		),
		array(
			'id' => '927',
			'role_id' => '5',
			'hero_id' => '88',
			'level' => '10',
			'created' => '2014-09-08 22:40:29',
			'modified' => '2014-09-08 22:40:29'
		),
		array(
			'id' => '928',
			'role_id' => '6',
			'hero_id' => '88',
			'level' => '5',
			'created' => '2014-09-08 22:40:33',
			'modified' => '2014-09-08 22:40:33'
		),
		array(
			'id' => '929',
			'role_id' => '7',
			'hero_id' => '88',
			'level' => '0',
			'created' => '2014-09-08 22:40:37',
			'modified' => '2014-09-08 22:40:37'
		),
		array(
			'id' => '930',
			'role_id' => '8',
			'hero_id' => '88',
			'level' => '0',
			'created' => '2014-09-08 22:40:40',
			'modified' => '2014-09-08 22:40:40'
		),
		array(
			'id' => '931',
			'role_id' => '9',
			'hero_id' => '88',
			'level' => '0',
			'created' => '2014-09-08 22:40:43',
			'modified' => '2014-09-08 22:40:43'
		),
		array(
			'id' => '932',
			'role_id' => '10',
			'hero_id' => '88',
			'level' => '0',
			'created' => '2014-09-08 22:40:45',
			'modified' => '2014-09-08 22:40:45'
		),
		array(
			'id' => '933',
			'role_id' => '11',
			'hero_id' => '88',
			'level' => '5',
			'created' => '2014-09-08 22:40:49',
			'modified' => '2014-09-08 22:40:49'
		),
		array(
			'id' => '934',
			'role_id' => '2',
			'hero_id' => '90',
			'level' => '0',
			'created' => '2014-09-08 22:41:01',
			'modified' => '2014-09-08 22:41:01'
		),
		array(
			'id' => '935',
			'role_id' => '3',
			'hero_id' => '90',
			'level' => '0',
			'created' => '2014-09-08 22:41:03',
			'modified' => '2014-09-08 22:41:03'
		),
		array(
			'id' => '936',
			'role_id' => '4',
			'hero_id' => '90',
			'level' => '5',
			'created' => '2014-09-08 22:41:07',
			'modified' => '2014-09-08 22:41:07'
		),
		array(
			'id' => '937',
			'role_id' => '5',
			'hero_id' => '90',
			'level' => '0',
			'created' => '2014-09-08 22:41:12',
			'modified' => '2014-09-08 22:41:12'
		),
		array(
			'id' => '938',
			'role_id' => '6',
			'hero_id' => '90',
			'level' => '1',
			'created' => '2014-09-08 22:41:16',
			'modified' => '2014-09-08 22:41:16'
		),
		array(
			'id' => '939',
			'role_id' => '7',
			'hero_id' => '90',
			'level' => '5',
			'created' => '2014-09-08 22:41:21',
			'modified' => '2014-09-08 22:41:21'
		),
		array(
			'id' => '940',
			'role_id' => '8',
			'hero_id' => '90',
			'level' => '1',
			'created' => '2014-09-08 22:41:25',
			'modified' => '2014-09-08 22:41:25'
		),
		array(
			'id' => '941',
			'role_id' => '9',
			'hero_id' => '90',
			'level' => '0',
			'created' => '2014-09-08 22:41:28',
			'modified' => '2014-09-08 22:41:28'
		),
		array(
			'id' => '942',
			'role_id' => '10',
			'hero_id' => '90',
			'level' => '5',
			'created' => '2014-09-08 22:41:33',
			'modified' => '2014-09-08 22:41:33'
		),
		array(
			'id' => '943',
			'role_id' => '11',
			'hero_id' => '90',
			'level' => '1',
			'created' => '2014-09-08 22:41:36',
			'modified' => '2014-09-08 22:41:36'
		),
		array(
			'id' => '944',
			'role_id' => '2',
			'hero_id' => '92',
			'level' => '1',
			'created' => '2014-09-08 22:41:45',
			'modified' => '2014-09-08 22:41:45'
		),
		array(
			'id' => '945',
			'role_id' => '3',
			'hero_id' => '92',
			'level' => '10',
			'created' => '2014-09-08 22:41:49',
			'modified' => '2014-09-08 22:41:49'
		),
		array(
			'id' => '946',
			'role_id' => '4',
			'hero_id' => '92',
			'level' => '0',
			'created' => '2014-09-08 22:41:54',
			'modified' => '2014-09-08 22:41:54'
		),
		array(
			'id' => '947',
			'role_id' => '5',
			'hero_id' => '92',
			'level' => '0',
			'created' => '2014-09-08 22:41:57',
			'modified' => '2014-09-08 22:41:57'
		),
		array(
			'id' => '948',
			'role_id' => '6',
			'hero_id' => '92',
			'level' => '1',
			'created' => '2014-09-08 22:42:01',
			'modified' => '2014-09-08 22:42:01'
		),
		array(
			'id' => '949',
			'role_id' => '7',
			'hero_id' => '92',
			'level' => '5',
			'created' => '2014-09-08 22:42:06',
			'modified' => '2014-09-08 22:42:06'
		),
		array(
			'id' => '950',
			'role_id' => '8',
			'hero_id' => '92',
			'level' => '10',
			'created' => '2014-09-08 22:42:10',
			'modified' => '2014-09-08 22:42:10'
		),
		array(
			'id' => '951',
			'role_id' => '9',
			'hero_id' => '92',
			'level' => '0',
			'created' => '2014-09-08 22:42:14',
			'modified' => '2014-09-08 22:42:14'
		),
		array(
			'id' => '952',
			'role_id' => '10',
			'hero_id' => '92',
			'level' => '0',
			'created' => '2014-09-08 22:42:17',
			'modified' => '2014-09-08 22:42:17'
		),
		array(
			'id' => '953',
			'role_id' => '11',
			'hero_id' => '92',
			'level' => '5',
			'created' => '2014-09-08 22:42:22',
			'modified' => '2014-09-08 22:42:22'
		),
		array(
			'id' => '954',
			'role_id' => '2',
			'hero_id' => '94',
			'level' => '0',
			'created' => '2014-09-08 22:42:45',
			'modified' => '2014-09-08 22:42:45'
		),
		array(
			'id' => '955',
			'role_id' => '3',
			'hero_id' => '94',
			'level' => '1',
			'created' => '2014-09-08 22:42:48',
			'modified' => '2014-09-08 22:42:48'
		),
		array(
			'id' => '956',
			'role_id' => '4',
			'hero_id' => '94',
			'level' => '0',
			'created' => '2014-09-08 22:42:52',
			'modified' => '2014-09-08 22:42:52'
		),
		array(
			'id' => '957',
			'role_id' => '5',
			'hero_id' => '94',
			'level' => '0',
			'created' => '2014-09-08 22:42:55',
			'modified' => '2014-09-08 22:42:55'
		),
		array(
			'id' => '958',
			'role_id' => '6',
			'hero_id' => '94',
			'level' => '1',
			'created' => '2014-09-08 22:42:59',
			'modified' => '2014-09-08 22:42:59'
		),
		array(
			'id' => '959',
			'role_id' => '7',
			'hero_id' => '94',
			'level' => '10',
			'created' => '2014-09-08 22:43:03',
			'modified' => '2014-09-08 22:43:03'
		),
		array(
			'id' => '960',
			'role_id' => '8',
			'hero_id' => '94',
			'level' => '0',
			'created' => '2014-09-08 22:43:08',
			'modified' => '2014-09-08 22:43:08'
		),
		array(
			'id' => '961',
			'role_id' => '9',
			'hero_id' => '94',
			'level' => '10',
			'created' => '2014-09-08 22:43:12',
			'modified' => '2014-09-08 22:43:12'
		),
		array(
			'id' => '962',
			'role_id' => '10',
			'hero_id' => '94',
			'level' => '1',
			'created' => '2014-09-08 22:43:16',
			'modified' => '2014-09-08 22:43:16'
		),
		array(
			'id' => '963',
			'role_id' => '11',
			'hero_id' => '94',
			'level' => '0',
			'created' => '2014-09-08 22:43:20',
			'modified' => '2014-09-08 22:43:20'
		),
		array(
			'id' => '964',
			'role_id' => '2',
			'hero_id' => '96',
			'level' => '0',
			'created' => '2014-09-08 22:43:27',
			'modified' => '2014-09-08 22:43:27'
		),
		array(
			'id' => '965',
			'role_id' => '3',
			'hero_id' => '96',
			'level' => '1',
			'created' => '2014-09-08 22:43:30',
			'modified' => '2014-09-08 22:44:00'
		),
		array(
			'id' => '966',
			'role_id' => '4',
			'hero_id' => '96',
			'level' => '5',
			'created' => '2014-09-08 22:43:32',
			'modified' => '2014-09-08 22:44:12'
		),
		array(
			'id' => '967',
			'role_id' => '5',
			'hero_id' => '96',
			'level' => '0',
			'created' => '2014-09-08 22:44:22',
			'modified' => '2014-09-08 22:44:22'
		),
		array(
			'id' => '968',
			'role_id' => '6',
			'hero_id' => '96',
			'level' => '10',
			'created' => '2014-09-08 22:44:31',
			'modified' => '2014-09-08 22:44:31'
		),
		array(
			'id' => '969',
			'role_id' => '7',
			'hero_id' => '96',
			'level' => '5',
			'created' => '2014-09-08 22:44:36',
			'modified' => '2014-09-08 22:44:36'
		),
		array(
			'id' => '970',
			'role_id' => '8',
			'hero_id' => '96',
			'level' => '1',
			'created' => '2014-09-08 22:44:40',
			'modified' => '2014-09-08 22:44:40'
		),
		array(
			'id' => '971',
			'role_id' => '9',
			'hero_id' => '96',
			'level' => '0',
			'created' => '2014-09-08 22:44:45',
			'modified' => '2014-09-08 22:44:45'
		),
		array(
			'id' => '972',
			'role_id' => '10',
			'hero_id' => '96',
			'level' => '5',
			'created' => '2014-09-08 22:44:49',
			'modified' => '2014-09-08 22:44:49'
		),
		array(
			'id' => '973',
			'role_id' => '11',
			'hero_id' => '96',
			'level' => '1',
			'created' => '2014-09-08 22:44:52',
			'modified' => '2014-09-08 22:44:52'
		),
		array(
			'id' => '974',
			'role_id' => '2',
			'hero_id' => '98',
			'level' => '1',
			'created' => '2014-09-08 22:45:05',
			'modified' => '2014-09-08 22:45:05'
		),
		array(
			'id' => '975',
			'role_id' => '3',
			'hero_id' => '98',
			'level' => '1',
			'created' => '2014-09-08 22:45:08',
			'modified' => '2014-09-08 22:45:08'
		),
		array(
			'id' => '976',
			'role_id' => '4',
			'hero_id' => '98',
			'level' => '0',
			'created' => '2014-09-08 22:45:12',
			'modified' => '2014-09-08 22:45:12'
		),
		array(
			'id' => '977',
			'role_id' => '5',
			'hero_id' => '98',
			'level' => '0',
			'created' => '2014-09-08 22:45:17',
			'modified' => '2014-09-08 22:45:17'
		),
		array(
			'id' => '978',
			'role_id' => '6',
			'hero_id' => '98',
			'level' => '5',
			'created' => '2014-09-08 22:51:30',
			'modified' => '2014-09-08 22:51:30'
		),
		array(
			'id' => '979',
			'role_id' => '7',
			'hero_id' => '98',
			'level' => '5',
			'created' => '2014-09-08 22:51:34',
			'modified' => '2014-09-08 22:51:34'
		),
		array(
			'id' => '980',
			'role_id' => '8',
			'hero_id' => '98',
			'level' => '0',
			'created' => '2014-09-08 22:51:38',
			'modified' => '2014-09-08 22:51:38'
		),
		array(
			'id' => '981',
			'role_id' => '9',
			'hero_id' => '98',
			'level' => '0',
			'created' => '2014-09-08 22:51:45',
			'modified' => '2014-09-08 22:51:45'
		),
		array(
			'id' => '982',
			'role_id' => '10',
			'hero_id' => '98',
			'level' => '0',
			'created' => '2014-09-08 22:51:47',
			'modified' => '2014-09-08 22:51:47'
		),
		array(
			'id' => '983',
			'role_id' => '11',
			'hero_id' => '98',
			'level' => '5',
			'created' => '2014-09-08 22:51:52',
			'modified' => '2014-09-08 22:51:52'
		),
		array(
			'id' => '984',
			'role_id' => '2',
			'hero_id' => '99',
			'level' => '1',
			'created' => '2014-09-08 22:52:01',
			'modified' => '2014-09-08 22:52:01'
		),
		array(
			'id' => '985',
			'role_id' => '3',
			'hero_id' => '99',
			'level' => '1',
			'created' => '2014-09-08 22:52:05',
			'modified' => '2014-09-08 22:52:05'
		),
		array(
			'id' => '986',
			'role_id' => '4',
			'hero_id' => '99',
			'level' => '1',
			'created' => '2014-09-08 22:52:08',
			'modified' => '2014-09-08 22:52:08'
		),
		array(
			'id' => '987',
			'role_id' => '5',
			'hero_id' => '99',
			'level' => '0',
			'created' => '2014-09-08 22:52:11',
			'modified' => '2014-09-08 22:52:11'
		),
		array(
			'id' => '988',
			'role_id' => '6',
			'hero_id' => '99',
			'level' => '5',
			'created' => '2014-09-08 22:52:16',
			'modified' => '2014-09-08 22:52:16'
		),
		array(
			'id' => '989',
			'role_id' => '7',
			'hero_id' => '99',
			'level' => '1',
			'created' => '2014-09-08 22:52:20',
			'modified' => '2014-09-08 22:52:20'
		),
		array(
			'id' => '990',
			'role_id' => '8',
			'hero_id' => '99',
			'level' => '10',
			'created' => '2014-09-08 22:52:25',
			'modified' => '2014-09-08 22:52:25'
		),
		array(
			'id' => '991',
			'role_id' => '9',
			'hero_id' => '99',
			'level' => '0',
			'created' => '2014-09-08 22:52:31',
			'modified' => '2014-09-08 22:52:31'
		),
		array(
			'id' => '992',
			'role_id' => '10',
			'hero_id' => '99',
			'level' => '0',
			'created' => '2014-09-08 22:52:34',
			'modified' => '2014-09-08 22:52:34'
		),
		array(
			'id' => '993',
			'role_id' => '11',
			'hero_id' => '99',
			'level' => '10',
			'created' => '2014-09-08 22:52:39',
			'modified' => '2014-09-08 22:52:39'
		),
		array(
			'id' => '994',
			'role_id' => '2',
			'hero_id' => '100',
			'level' => '1',
			'created' => '2014-09-08 22:52:47',
			'modified' => '2014-09-08 22:52:47'
		),
		array(
			'id' => '995',
			'role_id' => '3',
			'hero_id' => '100',
			'level' => '0',
			'created' => '2014-09-08 22:52:51',
			'modified' => '2014-09-08 22:52:51'
		),
		array(
			'id' => '996',
			'role_id' => '4',
			'hero_id' => '100',
			'level' => '0',
			'created' => '2014-09-08 22:52:53',
			'modified' => '2014-09-08 22:52:53'
		),
		array(
			'id' => '997',
			'role_id' => '5',
			'hero_id' => '100',
			'level' => '0',
			'created' => '2014-09-08 22:52:57',
			'modified' => '2014-09-08 22:52:57'
		),
		array(
			'id' => '998',
			'role_id' => '6',
			'hero_id' => '100',
			'level' => '10',
			'created' => '2014-09-08 22:53:01',
			'modified' => '2014-09-08 22:53:01'
		),
		array(
			'id' => '999',
			'role_id' => '7',
			'hero_id' => '100',
			'level' => '5',
			'created' => '2014-09-08 22:53:06',
			'modified' => '2014-09-08 22:53:06'
		),
		array(
			'id' => '1000',
			'role_id' => '8',
			'hero_id' => '100',
			'level' => '5',
			'created' => '2014-09-08 22:53:09',
			'modified' => '2014-09-08 22:53:09'
		),
		array(
			'id' => '1001',
			'role_id' => '9',
			'hero_id' => '100',
			'level' => '0',
			'created' => '2014-09-08 22:53:13',
			'modified' => '2014-09-08 22:53:13'
		),
		array(
			'id' => '1002',
			'role_id' => '10',
			'hero_id' => '100',
			'level' => '1',
			'created' => '2014-09-08 22:53:17',
			'modified' => '2014-09-08 22:53:17'
		),
		array(
			'id' => '1003',
			'role_id' => '11',
			'hero_id' => '100',
			'level' => '5',
			'created' => '2014-09-08 22:53:21',
			'modified' => '2014-09-08 22:53:21'
		),
		array(
			'id' => '1004',
			'role_id' => '2',
			'hero_id' => '101',
			'level' => '0',
			'created' => '2014-09-08 22:53:33',
			'modified' => '2014-09-08 22:53:33'
		),
		array(
			'id' => '1005',
			'role_id' => '3',
			'hero_id' => '101',
			'level' => '5',
			'created' => '2014-09-08 22:53:37',
			'modified' => '2014-09-08 22:53:37'
		),
		array(
			'id' => '1006',
			'role_id' => '4',
			'hero_id' => '101',
			'level' => '1',
			'created' => '2014-09-08 22:53:41',
			'modified' => '2014-09-08 22:53:41'
		),
		array(
			'id' => '1007',
			'role_id' => '5',
			'hero_id' => '101',
			'level' => '5',
			'created' => '2014-09-08 22:53:45',
			'modified' => '2014-09-08 22:53:45'
		),
		array(
			'id' => '1008',
			'role_id' => '6',
			'hero_id' => '101',
			'level' => '5',
			'created' => '2014-09-08 22:53:49',
			'modified' => '2014-09-08 22:53:49'
		),
		array(
			'id' => '1009',
			'role_id' => '7',
			'hero_id' => '101',
			'level' => '1',
			'created' => '2014-09-08 22:53:52',
			'modified' => '2014-09-08 22:53:52'
		),
		array(
			'id' => '1010',
			'role_id' => '8',
			'hero_id' => '101',
			'level' => '1',
			'created' => '2014-09-08 22:53:57',
			'modified' => '2014-09-08 22:53:57'
		),
		array(
			'id' => '1011',
			'role_id' => '9',
			'hero_id' => '101',
			'level' => '1',
			'created' => '2014-09-08 22:54:00',
			'modified' => '2014-09-08 22:54:00'
		),
		array(
			'id' => '1012',
			'role_id' => '10',
			'hero_id' => '101',
			'level' => '0',
			'created' => '2014-09-08 22:54:04',
			'modified' => '2014-09-08 22:54:04'
		),
		array(
			'id' => '1013',
			'role_id' => '11',
			'hero_id' => '101',
			'level' => '1',
			'created' => '2014-09-08 22:54:07',
			'modified' => '2014-09-08 22:54:07'
		),
		array(
			'id' => '1014',
			'role_id' => '2',
			'hero_id' => '102',
			'level' => '5',
			'created' => '2014-09-08 22:54:21',
			'modified' => '2014-09-08 22:54:21'
		),
		array(
			'id' => '1015',
			'role_id' => '3',
			'hero_id' => '102',
			'level' => '5',
			'created' => '2014-09-08 22:54:24',
			'modified' => '2014-09-08 22:54:24'
		),
		array(
			'id' => '1016',
			'role_id' => '4',
			'hero_id' => '102',
			'level' => '0',
			'created' => '2014-09-08 22:54:32',
			'modified' => '2014-09-08 22:54:32'
		),
		array(
			'id' => '1017',
			'role_id' => '5',
			'hero_id' => '102',
			'level' => '1',
			'created' => '2014-09-08 22:55:25',
			'modified' => '2014-09-08 22:55:25'
		),
		array(
			'id' => '1018',
			'role_id' => '6',
			'hero_id' => '102',
			'level' => '1',
			'created' => '2014-09-08 22:55:29',
			'modified' => '2014-09-08 22:55:29'
		),
		array(
			'id' => '1019',
			'role_id' => '7',
			'hero_id' => '102',
			'level' => '0',
			'created' => '2014-09-08 22:55:35',
			'modified' => '2014-09-08 22:55:35'
		),
		array(
			'id' => '1020',
			'role_id' => '8',
			'hero_id' => '102',
			'level' => '0',
			'created' => '2014-09-08 22:55:41',
			'modified' => '2014-09-08 22:55:41'
		),
		array(
			'id' => '1021',
			'role_id' => '9',
			'hero_id' => '102',
			'level' => '5',
			'created' => '2014-09-08 22:55:46',
			'modified' => '2014-09-08 22:55:46'
		),
		array(
			'id' => '1022',
			'role_id' => '10',
			'hero_id' => '102',
			'level' => '0',
			'created' => '2014-09-08 22:55:52',
			'modified' => '2014-09-08 22:55:52'
		),
		array(
			'id' => '1023',
			'role_id' => '11',
			'hero_id' => '102',
			'level' => '0',
			'created' => '2014-09-08 22:55:55',
			'modified' => '2014-09-08 22:55:55'
		),
		array(
			'id' => '1024',
			'role_id' => '2',
			'hero_id' => '103',
			'level' => '1',
			'created' => '2014-09-08 22:56:21',
			'modified' => '2014-09-08 22:56:21'
		),
		array(
			'id' => '1025',
			'role_id' => '3',
			'hero_id' => '103',
			'level' => '1',
			'created' => '2014-09-08 22:56:24',
			'modified' => '2014-09-08 22:56:24'
		),
		array(
			'id' => '1026',
			'role_id' => '4',
			'hero_id' => '103',
			'level' => '0',
			'created' => '2014-09-08 22:56:29',
			'modified' => '2014-09-08 22:56:29'
		),
		array(
			'id' => '1027',
			'role_id' => '5',
			'hero_id' => '103',
			'level' => '0',
			'created' => '2014-09-08 22:56:33',
			'modified' => '2014-09-08 22:56:33'
		),
		array(
			'id' => '1028',
			'role_id' => '6',
			'hero_id' => '103',
			'level' => '0',
			'created' => '2014-09-08 22:56:38',
			'modified' => '2014-09-08 22:56:38'
		),
		array(
			'id' => '1029',
			'role_id' => '7',
			'hero_id' => '103',
			'level' => '5',
			'created' => '2014-09-08 22:56:42',
			'modified' => '2014-09-08 22:56:42'
		),
		array(
			'id' => '1030',
			'role_id' => '8',
			'hero_id' => '103',
			'level' => '5',
			'created' => '2014-09-08 22:56:46',
			'modified' => '2014-09-08 22:56:46'
		),
		array(
			'id' => '1031',
			'role_id' => '9',
			'hero_id' => '103',
			'level' => '0',
			'created' => '2014-09-08 22:56:50',
			'modified' => '2014-09-08 22:56:50'
		),
		array(
			'id' => '1032',
			'role_id' => '10',
			'hero_id' => '103',
			'level' => '0',
			'created' => '2014-09-08 22:56:53',
			'modified' => '2014-09-08 22:56:53'
		),
		array(
			'id' => '1033',
			'role_id' => '11',
			'hero_id' => '103',
			'level' => '5',
			'created' => '2014-09-08 22:56:58',
			'modified' => '2014-09-08 22:56:58'
		),
		array(
			'id' => '1034',
			'role_id' => '2',
			'hero_id' => '104',
			'level' => '10',
			'created' => '2014-09-08 22:57:07',
			'modified' => '2014-09-08 22:57:07'
		),
		array(
			'id' => '1035',
			'role_id' => '3',
			'hero_id' => '104',
			'level' => '1',
			'created' => '2014-09-08 22:57:10',
			'modified' => '2014-09-08 22:57:10'
		),
		array(
			'id' => '1036',
			'role_id' => '4',
			'hero_id' => '104',
			'level' => '0',
			'created' => '2014-09-08 22:57:14',
			'modified' => '2014-09-08 22:57:14'
		),
		array(
			'id' => '1037',
			'role_id' => '5',
			'hero_id' => '104',
			'level' => '0',
			'created' => '2014-09-08 22:57:17',
			'modified' => '2014-09-08 22:57:17'
		),
		array(
			'id' => '1038',
			'role_id' => '6',
			'hero_id' => '104',
			'level' => '5',
			'created' => '2014-09-08 22:57:21',
			'modified' => '2014-09-08 22:57:21'
		),
		array(
			'id' => '1039',
			'role_id' => '7',
			'hero_id' => '104',
			'level' => '10',
			'created' => '2014-09-08 22:57:26',
			'modified' => '2014-09-08 22:57:26'
		),
		array(
			'id' => '1040',
			'role_id' => '8',
			'hero_id' => '104',
			'level' => '0',
			'created' => '2014-09-08 22:57:30',
			'modified' => '2014-09-08 22:57:30'
		),
		array(
			'id' => '1041',
			'role_id' => '9',
			'hero_id' => '104',
			'level' => '5',
			'created' => '2014-09-08 22:57:34',
			'modified' => '2014-09-08 22:57:34'
		),
		array(
			'id' => '1042',
			'role_id' => '10',
			'hero_id' => '104',
			'level' => '5',
			'created' => '2014-09-08 22:57:37',
			'modified' => '2014-09-08 22:57:37'
		),
		array(
			'id' => '1043',
			'role_id' => '11',
			'hero_id' => '104',
			'level' => '1',
			'created' => '2014-09-08 22:57:40',
			'modified' => '2014-09-08 22:57:40'
		),
		array(
			'id' => '1044',
			'role_id' => '2',
			'hero_id' => '105',
			'level' => '1',
			'created' => '2014-09-08 22:57:48',
			'modified' => '2014-09-08 22:57:48'
		),
		array(
			'id' => '1045',
			'role_id' => '3',
			'hero_id' => '105',
			'level' => '0',
			'created' => '2014-09-08 22:57:52',
			'modified' => '2014-09-08 22:57:52'
		),
		array(
			'id' => '1046',
			'role_id' => '4',
			'hero_id' => '105',
			'level' => '0',
			'created' => '2014-09-08 22:57:54',
			'modified' => '2014-09-08 22:57:54'
		),
		array(
			'id' => '1047',
			'role_id' => '5',
			'hero_id' => '105',
			'level' => '0',
			'created' => '2014-09-08 22:57:57',
			'modified' => '2014-09-08 22:57:57'
		),
		array(
			'id' => '1048',
			'role_id' => '6',
			'hero_id' => '105',
			'level' => '0',
			'created' => '2014-09-08 22:58:01',
			'modified' => '2014-09-08 22:58:01'
		),
		array(
			'id' => '1049',
			'role_id' => '7',
			'hero_id' => '105',
			'level' => '5',
			'created' => '2014-09-08 22:58:05',
			'modified' => '2014-09-08 22:58:05'
		),
		array(
			'id' => '1050',
			'role_id' => '8',
			'hero_id' => '105',
			'level' => '1',
			'created' => '2014-09-08 22:58:10',
			'modified' => '2014-09-08 22:58:10'
		),
		array(
			'id' => '1051',
			'role_id' => '9',
			'hero_id' => '105',
			'level' => '0',
			'created' => '2014-09-08 22:58:16',
			'modified' => '2014-09-08 22:58:16'
		),
		array(
			'id' => '1052',
			'role_id' => '10',
			'hero_id' => '105',
			'level' => '5',
			'created' => '2014-09-08 22:58:20',
			'modified' => '2014-09-08 22:58:20'
		),
		array(
			'id' => '1053',
			'role_id' => '11',
			'hero_id' => '105',
			'level' => '1',
			'created' => '2014-09-08 22:58:24',
			'modified' => '2014-09-08 22:58:24'
		),
		array(
			'id' => '1054',
			'role_id' => '2',
			'hero_id' => '106',
			'level' => '5',
			'created' => '2014-09-08 22:58:43',
			'modified' => '2014-09-08 22:58:43'
		),
		array(
			'id' => '1055',
			'role_id' => '3',
			'hero_id' => '106',
			'level' => '5',
			'created' => '2014-09-08 22:58:46',
			'modified' => '2014-09-08 22:58:46'
		),
		array(
			'id' => '1056',
			'role_id' => '4',
			'hero_id' => '106',
			'level' => '0',
			'created' => '2014-09-08 22:58:50',
			'modified' => '2014-09-08 22:58:50'
		),
		array(
			'id' => '1057',
			'role_id' => '5',
			'hero_id' => '106',
			'level' => '0',
			'created' => '2014-09-08 22:58:53',
			'modified' => '2014-09-08 22:58:53'
		),
		array(
			'id' => '1058',
			'role_id' => '6',
			'hero_id' => '106',
			'level' => '0',
			'created' => '2014-09-08 22:58:56',
			'modified' => '2014-09-08 22:58:56'
		),
		array(
			'id' => '1059',
			'role_id' => '7',
			'hero_id' => '106',
			'level' => '5',
			'created' => '2014-09-08 22:59:00',
			'modified' => '2014-09-08 22:59:00'
		),
		array(
			'id' => '1060',
			'role_id' => '8',
			'hero_id' => '106',
			'level' => '1',
			'created' => '2014-09-08 22:59:04',
			'modified' => '2014-09-08 22:59:04'
		),
		array(
			'id' => '1061',
			'role_id' => '9',
			'hero_id' => '106',
			'level' => '0',
			'created' => '2014-09-08 22:59:08',
			'modified' => '2014-09-08 22:59:08'
		),
		array(
			'id' => '1062',
			'role_id' => '10',
			'hero_id' => '106',
			'level' => '0',
			'created' => '2014-09-08 22:59:11',
			'modified' => '2014-09-08 22:59:11'
		),
		array(
			'id' => '1063',
			'role_id' => '11',
			'hero_id' => '106',
			'level' => '10',
			'created' => '2014-09-08 22:59:15',
			'modified' => '2014-09-08 22:59:15'
		),
		array(
			'id' => '1064',
			'role_id' => '2',
			'hero_id' => '108',
			'level' => '5',
			'created' => '2014-09-08 22:59:25',
			'modified' => '2014-09-08 22:59:25'
		),
		array(
			'id' => '1065',
			'role_id' => '3',
			'hero_id' => '108',
			'level' => '0',
			'created' => '2014-09-08 22:59:29',
			'modified' => '2014-09-08 22:59:29'
		),
		array(
			'id' => '1066',
			'role_id' => '4',
			'hero_id' => '108',
			'level' => '5',
			'created' => '2014-09-08 22:59:32',
			'modified' => '2014-09-08 22:59:32'
		),
		array(
			'id' => '1067',
			'role_id' => '5',
			'hero_id' => '108',
			'level' => '0',
			'created' => '2014-09-08 22:59:37',
			'modified' => '2014-09-08 22:59:37'
		),
		array(
			'id' => '1068',
			'role_id' => '6',
			'hero_id' => '108',
			'level' => '1',
			'created' => '2014-09-08 22:59:40',
			'modified' => '2014-09-08 22:59:40'
		),
		array(
			'id' => '1069',
			'role_id' => '7',
			'hero_id' => '108',
			'level' => '10',
			'created' => '2014-09-08 22:59:44',
			'modified' => '2014-09-08 22:59:44'
		),
		array(
			'id' => '1070',
			'role_id' => '8',
			'hero_id' => '108',
			'level' => '10',
			'created' => '2014-09-08 22:59:48',
			'modified' => '2014-09-08 22:59:48'
		),
		array(
			'id' => '1071',
			'role_id' => '9',
			'hero_id' => '108',
			'level' => '1',
			'created' => '2014-09-08 22:59:53',
			'modified' => '2014-09-08 22:59:53'
		),
		array(
			'id' => '1072',
			'role_id' => '10',
			'hero_id' => '108',
			'level' => '0',
			'created' => '2014-09-08 22:59:57',
			'modified' => '2014-09-08 22:59:57'
		),
		array(
			'id' => '1073',
			'role_id' => '11',
			'hero_id' => '108',
			'level' => '5',
			'created' => '2014-09-08 23:00:01',
			'modified' => '2014-09-08 23:00:01'
		),
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
	);

}
