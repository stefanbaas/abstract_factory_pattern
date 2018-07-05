<?php

namespace App\Classes;

use App\Factories\RangedMedabotFactory;

class BuildRangedMedabot extends BuildMedabot
{

    public function makeMedabot()
    {
        return new RangedMedabotFactory();
    }
}