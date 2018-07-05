<?php

namespace App\Contracts;

use App\Classes\Medabot;

interface MedabotFactoryContract
{
    public function build() :Medabot;
}