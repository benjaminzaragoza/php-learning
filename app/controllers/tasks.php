<?php
//$tasks = $database->selectAll('tasks');

$tasks = Task::all();

require view('tasks');


//Consulta Mysql



//$statement->execute();

//$results = $statement->fetchAll(PDO::FETCH_CLASS,Task::class);
//
//var_dump($results);


//var_dump($tasks);

//////////////////////////////////////////
