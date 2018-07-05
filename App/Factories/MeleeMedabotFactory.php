<?php

namespace App\Factories;

use App\Classes\Medabot;
use App\Classes\Medals\BeetleMedal;
use App\Classes\MeleeMedabot;
use App\Classes\Parts\MeleeMedabotArm;
use App\Classes\Parts\MeleeMedabotHead;
use App\Classes\Parts\MeleeMedabotLeg;
use App\Contracts\MedabotFactoryContract;

class MeleeMedabotFactory implements MedabotFactoryContract
{
    public function build(): Medabot
    {
        $medabot = new MeleeMedabot();
        $medabot->setColour('green');
        $medabot->setHead(new MeleeMedabotHead());
        $medabot->setLeftArm(new MeleeMedabotArm());
        $medabot->setRightArm(new MeleeMedabotArm());
        $medabot->setLeftLeg(new MeleeMedabotLeg());
        $medabot->setRightLeg(new MeleeMedabotLeg());
        $medabot->setMedal(new BeetleMedal());

        return $medabot;
    }
}