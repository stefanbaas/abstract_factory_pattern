<?php

namespace App\Factories;

use App\Classes\Medabot;
use App\Classes\RangedMedabot;
use App\Contracts\MedabotFactoryContract;

class RangedMedabotFactory implements MedabotFactoryContract
{
    public function build() :Medabot
    {
        $medabot = new RangedMedabot();
        $medabot->setColour('red');
        return $medabot;
    }
}