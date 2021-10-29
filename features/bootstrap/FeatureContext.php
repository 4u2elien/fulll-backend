<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

// Entities
use App\Domain\Entity\Fleet;
use App\Domain\Entity\Vehicle;
use App\Domain\Entity\Location;

// Commands
use App\App\Command\AddVehicleToLocationCommand;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $fleet;

    private $vehicle;

    private $location;

    private $anotherUserFleet;

    private $msg_error;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }

    /**
     * @Given my fleet
     */
    public function myFleet()
    {
        $this->fleet = new Fleet();
    }

    /**
     * @Given a vehicle
     */
    public function aVehicle()
    {
        $this->vehicle = new Vehicle();
    }

    /**
     * @Given I have registered this vehicle into my fleet
     */
    public function iHaveRegisteredThisVehicleIntoMyFleet()
    {
        throw new PendingException();
    }

    /**
     * @Given a location
     */
    public function aLocation()
    {
        $this->location = new Location();
    }

    /**
     * @When I park my vehicle at this location
     */
    public function iParkMyVehicleAtThisLocation()
    {
        $cmd = new AddVehicleToLocationCommand();

        try {
            $cmd($this->vehicle, $this->location);
        } catch (\Throwable $e) {
            $this->msg_error = $e;
        }
    }

    /**
     * @Then the known location of my vehicle should verify this location
     */
    public function theKnownLocationOfMyVehicleShouldVerifyThisLocation()
    {
        throw new PendingException();
    }

    /**
     * @Given my vehicle has been parked into this location
     */
    public function myVehicleHasBeenParkedIntoThisLocation()
    {
        throw new PendingException();
    }

    /**
     * @When I try to park my vehicle at this location
     */
    public function iTryToParkMyVehicleAtThisLocation()
    {
        throw new PendingException();
    }

    /**
     * @Then I should be informed that my vehicle is already parked at this location
     */
    public function iShouldBeInformedThatMyVehicleIsAlreadyParkedAtThisLocation()
    {
        throw new PendingException();
    }

    /**
     * @When I register this vehicle into my fleet
     */
    public function iRegisterThisVehicleIntoMyFleet()
    {
        $cmd = new AddVehicleToFleetCommand();

        try {
            $cmd($this->fleet, $this->vehicle);
        } catch (\Throwable $e) {
            $this->msg_error = $e;
        }
    }

    /**
     * @Then this vehicle should be part of my vehicle fleet
     */
    public function thisVehicleShouldBePartOfMyVehicleFleet()
    {
        throw new PendingException();
    }

    /**
     * @When I try to register this vehicle into my fleet
     */
    public function iTryToRegisterThisVehicleIntoMyFleet()
    {
        throw new PendingException();
    }

    /**
     * @Then I should be informed this this vehicle has already been registered into my fleet
     */
    public function iShouldBeInformedThisThisVehicleHasAlreadyBeenRegisteredIntoMyFleet()
    {
        throw new PendingException();
    }

    /**
     * @Given the fleet of another user
     */
    public function theFleetOfAnotherUser()
    {
        throw new PendingException();
    }

    /**
     * @Given this vehicle has been registered into the other user's fleet
     */
    public function thisVehicleHasBeenRegisteredIntoTheOtherUsersFleet()
    {
        throw new PendingException();
    }
}
