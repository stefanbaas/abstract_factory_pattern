<?php

namespace App\Contracts;

interface MedabotFactory
{
    public function setColor(string $color);
    public function addHead();
    public function addArm();
    public function addLeg();
    public function addMedal();
}