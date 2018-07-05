<?php

namespace App\Classes\Medals;

use App\Classes\MedabotMedal;

class DragonMedal extends MedabotMedal
{
    public function toString(): string
    {
        return "Dragon medal";
    }
}