<?php

namespace Tests;

use App\Factories\RangedMedabotFactory;
use PHPUnit\Framework\TestCase;

class RangedMedabotFactoryTest extends TestCase
{
    private $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new RangedMedabotFactory();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }
}
