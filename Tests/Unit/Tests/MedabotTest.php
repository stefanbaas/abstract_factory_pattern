<?php

namespace Tests;

use App\Classes\Medabot;
use PHPUnit\Framework\TestCase;

class MedabotDouble extends Medabot
{

}

class MedabotTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BuildMedabotDouble();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

}
