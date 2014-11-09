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
	}

/**
 * testGetRandomTeam method
 *
 * @return void
 */
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
	}

/**
 * testGetHeroByGroup method
 *
 * @dataProvider provideGroups
 * @return void
 */
    public function testGetHeroesByGroup($groupId, $expectedHero) {
        $heroO = new Hero();
        $heroes = $heroO->getHeroByGroup($groupId);
        $this->assertContains($expectedHero, Hash::extract($heroes, '{n}.Hero.name'), $expectedHero." is in group ".$groupId );
    }

/**
 * testGetHeroBySide method
 *
 * @dataProvider provideSides
 * @return void
 */
	public function testGetHeroBySide($sideId, $expectedHero) {
        $heroO = new Hero();
        $heroes = $heroO->getHeroBySide($sideId);
        $this->assertContains($expectedHero, Hash::extract($heroes, '{n}.Hero.name'), $expectedHero." is in side ".$sideId );
	}

/**
 * testGetHeroByGroupAndSide method
 *
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

}
