<?php

namespace Tests;

use App\Classes\Medabot;
use App\Factories\MeleeMedabotFactory;
use PHPUnit\Framework\TestCase;

class MeleeMedabotFactoryTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new MeleeMedabotFactory();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testBuild () : void
    {
        $this->assertInstanceOf(Medabot::class, $this->sut->build());
    }
}
