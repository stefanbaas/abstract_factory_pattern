<?php

namespace App\Classes;

use App\Factories\RangedMedabotFactory;

class BuildRangedMedabot extends BuildMedabot
{

    public function makeMedabot()
    {
        $factory = new RangedMedabotFactory();
        return $factory->build();
    }
}