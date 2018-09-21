<?php
//
//require 'models/Task.php';
//
//new Task();
require 'framework/boostrap.php';
require 'models/Task.php';


$tasks = Task::all();

require 'views/tasks.blade.php';


















//task1=['name' => 'Comprar pa ','completed' => false];
//task2=['name' => 'Comprar llet ','completed' => false];
//task3=['name' => 'Fer el lit ','completed' => false];
//$tasks = [$task1, task2, task3];
// array

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
//$tasks=[
//
//    new Task('Comprar pa ',false),
//    new Task('Comprar llet ',true),
//    new Task('fer llit ',false)
//
//];
//$tasks = [
//    [
//        'name' => 'Comprar pa ',
//        'completed' => false
//    ],
//    [
//        'name' => 'Comprar llet ',
//        'completed' => true
//    ],
//    [
//        'name' => 'Fer el llit ',
//        'completed' => false
//    ]
//];