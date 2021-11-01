<?php

namespace App\App\Command;

use App\Domain\Entity\Fleet;
use App\Domain\Entity\Vehicle;

final class AddVehicleToFleetCommand
{
    function __invoke(Fleet $fleet, Vehicle $vehicle):void
    {
        $fleet->addVehicle($vehicle);
    }
}
