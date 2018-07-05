<?php

namespace App\Classes\Medals;

use App\Classes\MedabotMedal;

class BeetleMedal extends MedabotMedal
{
    public function toString(): string
    {
        return "Beetle medal";
    }
}