<?php

namespace Tests;

use App\Classes\BuildMedabot;
use App\Classes\BuildMeleeMedabot;
use App\Factories\MeleeMedabotFactory;
use PHPUnit\Framework\TestCase;

class BuildMeleeMedabotTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BuildMeleeMedabot();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(BuildMedabot::class, $this->sut);
    }

    public function testMakeMedabot () : void
    {
        $this->assertInstanceOf(MeleeMedabotFactory::class, $this->sut->makeMedabot());
    }

}
