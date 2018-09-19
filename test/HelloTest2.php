<?php

use PHPUnit\Framework\TestCase;

class HelloTest2 extends TestCase
{
    public function testHelloWorld ()
{
    require('../hello.php');
    $this->expectOutputString('Hola Mon');
}

    public function testMyFunction() {
//        include_once 'path/to/script.php';
//        $result = someFunction();
//
//        $this->assertEquals('expected result', $result);
}
}