<?php

namespace Library\Tests;

use Library\StringHelper;
use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    public function testToUpperCase()
    {
        $this->assertEquals('MERHABA DÜNYA', StringHelper::toUpperCase('merhaba dünya'));
    }

    public function testToLowerCase()
    {
        $this->assertEquals('merhaba dünya', StringHelper::toLowerCase('MERHABA DÜNYA'));
    }

    public function testCapitalize()
    {
        $this->assertEquals('Merhaba dünya', StringHelper::capitalize('merhaba dünya'));
    }
}