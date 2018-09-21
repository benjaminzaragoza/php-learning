<?php

require 'framework/boostrap.php';
require 'models/Person.php';


$people = Person::all();

//$pdo = connect();
//$people = fetchAll($pdo, 'people');
require 'views/people.blade.php';



//$people = fetchAll("people");

//
//try{
//    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XZvcnv9GqJ3DXLXl' );
//}catch(\PDOException $e){
//    die('Could not connect'.$e);
//}
//Consulta Mysql

