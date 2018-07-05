<?php

namespace Tests;

use App\Classes\Medabot;
use App\Classes\MeleeMedabot;
use PHPUnit\Framework\TestCase;

class MeleeMedabotTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new MeleeMedabot();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Medabot::class, $this->sut);
    }
}
