<?php

namespace Tests;

use App\Classes\BuildRangedMedabot;
use PHPUnit\Framework\TestCase;

class BuildRangedMedabotTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new BuildRangedMedabot();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }


}
