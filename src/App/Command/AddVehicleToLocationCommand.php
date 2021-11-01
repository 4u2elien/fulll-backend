<?php

namespace App\App\Command;

use App\Domain\Entity\Vehicle;
use App\Domain\Entity\Location;

final class AddVehicleToLocationCommand
{
    function __invoke(Vehicle $vehicle, Location $location):void
    {
          $vehicle->setLocation($location);
    }
}
