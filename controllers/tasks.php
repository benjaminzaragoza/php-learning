<?php
//$tasks = $database->selectAll('tasks');

$tasks = Task::all();

require view('tasks',$tasks);


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
