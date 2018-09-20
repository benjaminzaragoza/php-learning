<?php

use PHPUnit\Framework\TestCase;

class HelloWorldWebTest extends TestCase
{
    public function testHelloWorld ()
    {
        require('../index.php');
        //$this->expectOutputString('hola mon');
        $this->assertTrue($this->have('hola mon',));
    }
//ob_start(); function_which_produces_some_output();
// $this->assertEquals( ob_get_clean()
//
//     returns true if $needle is a substring of $haystack
    protected function have($needle, $haystack)
    {
        return strpos($haystack, $needle) !== false;
    }
}