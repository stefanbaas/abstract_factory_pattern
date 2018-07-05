<?php

namespace App\Classes;

use App\Contracts\MedalContract;

abstract class MedabotMedal implements MedalContract
{
    public function toString(): string
    {
        return "";
    }
}