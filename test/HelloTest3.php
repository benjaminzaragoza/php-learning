<?php

use PHPUnit\Framework\TestCase;

class HelloTest3 extends TestCase
{
    public function testHelloWorld ()
{
    require('../index.php');
    $this->assertTrue($this->have(  'Hola mon' ));

}

    public function have($needle,$haystack) {
//        include_once 'path/to/script.php';
//        $result = someFunction();
//
//        $this->assertEquals('expected result', $result);
        return strpos($haystack,$needle) !==false;
}
}