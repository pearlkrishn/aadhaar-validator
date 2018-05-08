<?php

namespace Pearl\AadhaarValidator\Tests;

use Pearl\AadhaarValidator\AadhaarValidator;
use PHPUnit\Framework\TestCase;

class AadhaarValidatorTest extends TestCase
{
    /**
     * @return \Pearl\AadhaarValidator\AadhaarValidator
     */
    private function initObj()
    {
        return new AadhaarValidator();
    }

    public function testValidAddhaar()
    {
        $obj = $this->initObj();
        $this->assertTrue($obj->validate("999999990019"));
        $this->assertTrue($obj->validate("999999990026"));
        $this->assertTrue($obj->validate("999999990042"));
        $this->assertTrue($obj->validate("999999990057"));
    }

    public function testInValidAddhaar()
    {
        $obj = $this->initObj();
        $this->assertFalse($obj->validate("999999990020"));
        $this->assertFalse($obj->validate("999999990029"));
        $this->assertFalse($obj->validate("999999990049"));
        $this->assertFalse($obj->validate("999999990055"));
        $this->assertFalse($obj->validate("233214435423"));
    }
}