<?php

require 'vendor/autoload.php';
require 'framework/bootstrap.php';

use App\Framework\Router;

Router::direct($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);


// MVC: Model Vista Controlador

//FC UN SOL FITXER PHP QUE EXECUTA TOTA LA APLICACIO
//SEMPRE SE EXECUTA PRIMER EL index.php

//uri
// tasks ->  require  views/tasks.blade.php
// /people .> require views/people.php
// ROUTER per URI

//COM ACONSEGUIR LA URI?

//$_GET o $_POST

//var_dump($_SERVER['REQUEST_URI']);
//die();
//
//// Dos opcions :
//// Funcio global
//require direct($uri);
// Metode dins classe (funcio dins una classe el seu nom tecnic es metode)
//require  $router -> direct($uri);


