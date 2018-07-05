<?php

namespace Tests;

use App\Classes\MedabotPart;
use PHPUnit\Framework\TestCase;

class MedabotPartDouble extends MedabotPart
{

}

class MedabotPartTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new MedabotPartDouble();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(MedabotPart::class, $this->sut);
    }

    /*public function testToString () : void
    {
        $this->assertTrue(is_string($this->sut->toString()));
    }*/
}
