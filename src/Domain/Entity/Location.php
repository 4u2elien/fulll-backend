<?php

namespace App\Domain\Entity;

class Location
{
    private $latitude;

    private $longitude;

    private $vehicle = null;

    public function __construct()
    {

    }

    public function setLatitude(float $lat)
    {
        $this->latitude = $lat;
    }

    public function setLongitude(float $lng)
    {
        $this->longitude = $lng;
    }

    public function setVehicle(Vehicle $vehicle)
    {
        if ($this->isAvailable()) {
            $this->vehicle = $vehicle;
        } elseif ($this->vehicle === $vehicle) {
            return new \Exception("This vehicle is already parked at this location.");
        } else {
            return new \Exception("A vehicle is already parked at this location.");
        }

        return $this;
    }

    public function removeVehicle(): self
    {
        $this->vehicle = null;
        return $this;
    }

    public function isAvailable(): bool
    {
        return (null === $this->vehicle);
    }
}
