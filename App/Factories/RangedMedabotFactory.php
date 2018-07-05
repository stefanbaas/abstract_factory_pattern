<?php

namespace App\Factories;

use App\Classes\Medabot;
use App\Classes\Parts\RangedMedabotArm;
use App\Classes\Parts\RangedMedabotHead;
use App\Classes\Parts\RangedMedabotLeg;
use App\Classes\RangedMedabot;
use App\Contracts\MedabotFactoryContract;

class RangedMedabotFactory implements MedabotFactoryContract
{
    public function build() :Medabot
    {
        $medabot = new RangedMedabot();
        $medabot->setColour('red');
        $medabot->setHead(new RangedMedabotHead());
        $medabot->setLeftArm(new RangedMedabotArm());
        $medabot->setRightArm(new RangedMedabotArm());
        $medabot->setLeftLeg(new RangedMedabotLeg());
        $medabot->setRightLeg(new RangedMedabotLeg());

        return $medabot;
    }
}