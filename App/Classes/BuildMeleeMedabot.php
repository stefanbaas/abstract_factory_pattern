<?php

namespace App\Classes;

use App\Factories\MeleeMedabotFactory;

class BuildMeleeMedabot extends BuildMedabot
{

    public function makeMedabot()
    {
        return new MeleeMedabotFactory();
    }
}