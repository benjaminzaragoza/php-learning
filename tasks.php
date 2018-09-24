<?php
//
//require 'models/Task.php';
//
//new Task();
//require 'framework/boostrap.php';
//require 'models/Task.php';

$database = require 'framework/boostrap.php';

//$tasks = Task::all();

$tasks = $database->selectAll('tasks');
require 'views/tasks.blade.php';


////connexio base de dades
//try{
//    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XZvcnv9GqJ3DXLXl' );
//}catch(\PDOException $e){
//    die('Could not connect'.$e);
//}
//Consulta Mysql



//$statement->execute();

//$results = $statement->fetchAll(PDO::FETCH_CLASS,Task::class);
//
//var_dump($results);


//var_dump($tasks);

//////////////////////////////////////////
