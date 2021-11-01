<?php

namespace App\Domain\Entity;

class Fleet
{
    private $vehicles = [];

    public function __construct()
    {

    }

    public function addVehicle(Vehicle $vehicle)
    {
        if (!$this->hasVehicle($vehicle)) {
            $this->vehicles[] = $vehicle;
        } else {
            return new \Exception("This vehicle is already into the current fleet.");
        }

        return $this;
    }

    public function removeVehicle(Vehicle $vehicle): self
    {
        if (($v_key = array_search($vehicle, $this->vehicles)) !== false)
            unset($this->vehicles[$v_key]);

        return $this;
    }

    public function getVehicles()
    {
        return $this->vehicles;
    }

    public function hasVehicle(Vehicle $vehicle): bool
    {
        return in_array($vehicle, $this->vehicles);
    }
}
