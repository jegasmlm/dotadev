<?php

App::uses('Hero', 'Model');

/**
 * Hero Test Case
 *
 */
class HeroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hero',
		'app.side',
		'app.group',
		'app.roles_hero',
		'app.role',
		'app.strategies_role',
		'app.strategy',
		'app.users_hero',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hero = ClassRegistry::init('Hero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hero);

		parent::tearDown();
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testGetTopRoles method
 *
 * @return void
 */
	public function testGetTopRoles() {
		$this->markTestIncomplete('testGetTopRoles not implemented.');
	}

/**
 * testGetTopRolesTest method
 *
 * @return void
 */
	public function testGetTopRolesTest() {
		$this->markTestIncomplete('testGetTopRolesTest not implemented.');
	}

/**
 * testGetRandomTeam method
 *
 * @return void
 */
	public function testGetRandomTeam() {
		$this->markTestIncomplete('testGetRandomTeam not implemented.');
	}

/**
 * testGetRandomHeroeByRole method
 *
 * @return void
 */
	public function testGetRandomHeroeByRole() {
		$expected = 5;
        $result = $this->Hero->GetRandomHeroeByRole(1);
        $this->assertContains('width: 90%', $result);
        $this->assertEquals($expected, $result, 'message');
	}

/**
 * testGetRandomTeamByStrategy method
 *
 * @return void
 */
	public function testGetRandomTeamByStrategy() {
		$this->markTestIncomplete('testGetRandomTeamByStrategy not implemented.');
	}

/**
 * testGetHeroByGroup method
 *
 * @return void
 */
	public function testGetHeroByGroup() {
		$this->markTestIncomplete('testGetHeroByGroup not implemented.');
	}

/**
 * testGetHeroBySide method
 *
 * @return void
 */
	public function testGetHeroBySide() {
		$this->markTestIncomplete('testGetHeroBySide not implemented.');
	}

/**
 * testGetHeroByGroupAndSide method
 *
 * @return void
 */
	public function testGetHeroByGroupAndSide() {
		$this->markTestIncomplete('testGetHeroByGroupAndSide not implemented.');
	}

}
