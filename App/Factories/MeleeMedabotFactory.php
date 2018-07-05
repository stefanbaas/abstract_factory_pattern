<?php

namespace App\Factories;

use App\Classes\Medabot;
use App\Classes\MeleeMedabot;
use App\Contracts\MedabotFactoryContract;

class MeleeMedabotFactory implements MedabotFactoryContract
{
    public function build(): Medabot
    {
        $medabot = new MeleeMedabot();
        $medabot->setColour('green');
        return $medabot;
    }
}