<?php

namespace Tests;

use App\Classes\MedabotMedal;
use App\Classes\Medals\BeetleMedal;
use PHPUnit\Framework\TestCase;

class BeetleMedalTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BeetleMedal();
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
