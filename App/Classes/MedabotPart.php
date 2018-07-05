<?php

namespace App\Classes;

use App\Contracts\PartContract;

abstract class MedabotPart implements PartContract
{
     public function toString(): string
     {
         return "";
     }
 }