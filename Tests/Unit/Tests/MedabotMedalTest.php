<?php

namespace Tests;

use App\Classes\MedabotMedal;
use PHPUnit\Framework\TestCase;

class MedabotMedalDouble extends MedabotMedal
{

}

class MedabotMedalTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new MedabotMedalDouble();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(MedabotMedal::class, $this->sut);
    }

    public function testToString () : void
    {
        $this->assertTrue(is_string($this->sut->toString()));
    }
}
