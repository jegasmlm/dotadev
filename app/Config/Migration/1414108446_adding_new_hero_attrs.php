<?php
class AddingNewHeroAttrs extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'heroes' => array(
					'attack_min' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'group_id'),
					'attack_max' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'attack_min'),
					'speed' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'attack_max'),
					'shield' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'speed'),
					'base_strength' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'shield'),
					'lvl_strength' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'base_strength'),
					'base_agility' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'lvl_strength'),
					'lvl_agility' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'base_agility'),
					'base_intelligence' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'lvl_agility'),
					'lvl_intelligence' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'after' => 'base_intelligence'),
				),
				'users' => array(
					'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8', 'after' => 'id'),
					'role' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8', 'after' => 'password'),
				),
			),
			'create_table' => array(
				'heroes_heros' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'hero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'counter_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'heroes_users' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'hero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'experience' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
			'drop_field' => array(
				'users' => array('name', 'login',),
			),
			'drop_table' => array(
				'heros_counters', 'users_heros'
			),
		),
		'down' => array(
			'drop_field' => array(
				'heroes' => array('attack_min', 'attack_max', 'speed', 'shield', 'base_strength', 'lvl_strength', 'base_agility', 'lvl_agility', 'base_intelligence', 'lvl_intelligence',),
				'users' => array('username', 'role',),
			),
			'drop_table' => array(
				'heroes_heros', 'heroes_users'
			),
			'create_field' => array(
				'users' => array(
					'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
					'login' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
				),
			),
			'create_table' => array(
				'heros_counters' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'hero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'counter_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				'users_heros' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
					'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'hero_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
					'experience' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
					'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function after($direction) {
		return true;
	}
}
