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
        $this->sut = new MedabotDouble();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Medabot::class, $this->sut);
    }

    public function testSetColour()
    {
        $this->sut->setColour('green');
        $this->assertEquals('green', $this->sut->getColour());

        $this->sut->setColour('red');
        $this->assertEquals('red', $this->sut->getColour());
    }
}
