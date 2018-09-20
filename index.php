<?php
require 'functions.php';

//var_dump($_GET['gre']);
//die();

//Array/Vector

//$platan = 'platan';
//$presec = 'presec';
//$taronja = 'taronja';
//
//$fruites = [$platan, $presec, $taronja ];
//
//echo $fruites[0];
//die();

//$person=[
//    'name' => 'Benjamin Zaragoza',
//    'dni' => '1231231F',
//    'mobile'=> '63434512'
//]

$greeting=hello($_GET['greeting']);

require 'views/index.blade.php';