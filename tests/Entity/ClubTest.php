<?php
namespace Torakel\DatabaseBundle\Tests;

use Torakel\DatabaseBundle\Entity\City as City;
use Torakel\DatabaseBundle\Entity\Club as Club;
use Torakel\DatabaseBundle\Entity\Country as Country;
use Torakel\DatabaseBundle\Entity\Ground as Ground;
use Torakel\DatabaseBundle\Entity\Referee as Referee;

use Doctrine\Common\Collections\ArrayCollection;

class ClubTest extends Test
{

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Club();
        $this->object2 = new Club();
    }

    /**
     * Tests the specific getters and setters for the City entity.
     */
    public function testGetterAndSetter()
    {

        $cityMock = $this->getMockBuilder(City::class)->getMock();
        $this->object->setCity($cityMock);
        $this->assertEquals($cityMock, $this->object->getCity());

        $team1 = $this->getMockBuilder(Team::class)->getMock();
        $team2 = $this->getMockBuilder(Team::class)->getMock();
        $team3 = $this->getMockBuilder(Team::class)->getMock();
        $teams = new ArrayCollection();
        $teams[] = $team1;
        $teams[] = $team2;
        $this->object->addTeam($team1);
        $this->object->addTeam($team2);
        $this->object->addTeam($team3);
        $this->object->removeTeam($team3);
        $this->assertEquals($teams, $this->object->getTeams());

    }
}