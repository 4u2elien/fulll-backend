<?php

namespace App\Domain\Entity;

class Vehicle
{
    private $location;

    private $fleet;

    public function __construct()
    {

    }

    public function getFleet(Fleet $fleet): ?Fleet
    {
        return $this->fleet;
    }

    public function setFleet(Fleet $fleet): self
    {
        $this->fleet = $fleet;
        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(Location $location): self
    {
        $location->setVehicle($this);
        $this->location = $location;

        return $this;
    }

    public function checkALocation(Location $location)
    {
        if ($this->location !== $location) {
            return new \Exception("The given location isn't the same as the vehicle location.");
        } else {
            return true;
        }
    }
}
