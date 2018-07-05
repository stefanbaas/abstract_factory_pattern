<?php

namespace App\Classes;

use App\Factories\MeleeMedabotFactory;

class BuildMeleeMedabot extends BuildMedabot
{

    public function makeMedabot()
    {
        $factory = new MeleeMedabotFactory();
        return $factory->build();
    }
}