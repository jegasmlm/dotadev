<?php
<<<<<<< HEAD

=======
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
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
<<<<<<< HEAD
		'app.users_hero',
		'app.user'
=======
		'app.user',
		'app.heroes_user'
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
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
<<<<<<< HEAD
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
=======
 * testGetHero method
 *
 * @return void
 */
	public function testGetHero() {
        $id = 10;
        $expectedName = 'Omniknight';
        $heroO = new Hero();
        $hero = $heroO->getHero($id);
        $this->assertEquals($expectedName, Hash::get($hero, 'Hero.name'), "Hero number 10 should be Omniknight");
	}

/**
 * testGetRandomTeam method
 *
 * @return void
 */
	public function testRandomTeamCantHaveRepeatedHeroes() {
        $heroO = new Hero();
        $heroes = Hash::extract($heroO->getRandomTeam(), '{n}.Hero.id');
        $flag = false;
        for($i=0; $i<count($heroes); $i++){
            for($j=$i+1; $j<count($heroes); $j++){
               if($heroes[$i]==$heroes[$j])
                   $flag=true;
            }
        }
        $this->assertEquals(false, $flag, "All the heroes of the team are different");
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
	}

/**
 * testGetRandomTeam method
 *
 * @return void
 */
<<<<<<< HEAD
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
=======
    public function testRandomTeamAlwaysHaveFiveHeroes() {
        $heroO = new Hero();
        $team = $heroO->getRandomTeam();
        $this->assertCount(5, $team, "A team always have 5 heroes");
    }

/**
 * testGetHeroByGroup method
 *
 * @return void
 */
    public function testGetHeroByGroupWorks() {
        $groupId = 1;
        $heroO = new Hero();
        $heroes = $heroO->getHeroByGroup($groupId);
        $this->assertGreaterThan(1, count($heroes), "There are more than 1 heroes in the group 1");
    }

/**
 * testGetHeroByGroup method
 *
 * @dataProvider provideGroupsCount
 * @return void
 */
	public function testCountGroups($groupId, $groupCount) {
        $heroO = new Hero();
        $heroes = $heroO->getHeroByGroup($groupId);
        $this->assertCount($groupCount, $heroes, "There are ".$groupCount." in group ".$groupId." heroes");
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
	}

/**
 * testGetHeroByGroup method
 *
<<<<<<< HEAD
 * @return void
 */
	public function testGetHeroByGroup() {
		$this->markTestIncomplete('testGetHeroByGroup not implemented.');
	}
=======
 * @dataProvider provideGroups
 * @return void
 */
    public function testGetHeroesByGroup($groupId, $expectedHero) {
        $heroO = new Hero();
        $heroes = $heroO->getHeroByGroup($groupId);
        $this->assertContains($expectedHero, Hash::extract($heroes, '{n}.Hero.name'), $expectedHero." is in group ".$groupId );
    }
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2

/**
 * testGetHeroBySide method
 *
<<<<<<< HEAD
 * @return void
 */
	public function testGetHeroBySide() {
		$this->markTestIncomplete('testGetHeroBySide not implemented.');
=======
 * @dataProvider provideSides
 * @return void
 */
	public function testGetHeroBySide($sideId, $expectedHero) {
        $heroO = new Hero();
        $heroes = $heroO->getHeroBySide($sideId);
        $this->assertContains($expectedHero, Hash::extract($heroes, '{n}.Hero.name'), $expectedHero." is in side ".$sideId );
>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
	}

/**
 * testGetHeroByGroupAndSide method
 *
<<<<<<< HEAD
 * @return void
 */
	public function testGetHeroByGroupAndSide() {
		$this->markTestIncomplete('testGetHeroByGroupAndSide not implemented.');
	}

=======
 * @dataProvider provideGroupsAndSides
 * @return void
 */
	public function testGetHeroByGroupAndSide($groupId, $sideId, $expectedHero) {
        $heroO = new Hero();
        $heroesByGroupAndSide = $heroO->getHeroByGroupAndSide($groupId, $sideId);
        $this->assertContains($expectedHero, Hash::extract($heroesByGroupAndSide, '{n}.Hero.name'), $expectedHero." is ".$groupId." and ".$sideId);
	}

    public function provideGroupsCount(){
        return array(
            array(1,36),
            array(2,34),
            array(3,38)
        );
    }

    public function provideGroups(){
        return array(
            array(1,'Omniknight'),
            array(2,'Sniper'),
            array(3,'Puck'),
            array(1,'Axe'),
            array(2,'Meepo'),
            array(3,'Witch Doctor')
        );
    }

    public function provideSides(){
        return array(
            array(1,'Omniknight'),
            array(1,'Sniper'),
            array(1,'Puck'),
            array(2,'Axe'),
            array(2,'Meepo'),
            array(2,'Witch Doctor')
        );
    }

    public function provideGroupsAndSides(){
        return array(
            array(1,1,'Omniknight'),
            array(2,1,'Sniper'),
            array(3,1,'Puck'),
            array(1,2,'Axe'),
            array(2,2,'Meepo'),
            array(3,2,'Witch Doctor')
        );
    }

>>>>>>> 2d06c02d09579067c9f51526d3d83f8ddf4543a2
}
