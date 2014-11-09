<?php
App::uses('RolesHero', 'Model');

/**
 * RolesHero Test Case
 *
 */
class RolesHeroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.roles_hero',
		'app.role',
		'app.strategies_role',
		'app.strategy',
		'app.hero',
		'app.side',
		'app.group',
		'app.user',
		'app.heroes_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RolesHero = ClassRegistry::init('RolesHero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RolesHero);

		parent::tearDown();
	}

/**
 * testGetRandomHeroeByRole method
 *
 * @return void
 */
	public function testGetRandomHeroeByRole() {
        $role_id = 5;
        $RolesHero = new RolesHero();
        $hero = $RolesHero->getRandomHeroeByRole($role_id);
        var_dump(Hash::extract($hero,'RolesHero.level'));
        $this->assertGreaterThan(5, Hash::get($hero,'RolesHero.level'), "The random hero should have a role level greater than 5");
	}
}
