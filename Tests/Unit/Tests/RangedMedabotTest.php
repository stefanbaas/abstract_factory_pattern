<?php

namespace Tests;

use App\Classes\Medabot;
use App\Classes\RangedMedabot;
use PHPUnit\Framework\TestCase;

class RangedMedabotTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new RangedMedabot();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }
}
