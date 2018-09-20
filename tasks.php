<?php
//
//require 'models/Task.php';
//
//new Task();
//task1=['name' => 'Comprar pa ','completed' => false];
//task2=['name' => 'Comprar llet ','completed' => false];
//task3=['name' => 'Fer el lit ','completed' => false];
//$tasks = [$task1, task2, task3];
// array
$tasks = [
    [
        'name' => 'Comprar pa ',
        'completed' => false
    ],
    [
        'name' => 'Comprar llet ',
        'completed' => true
    ],
    [
        'name' => 'Fer el llit ',
        'completed' => false
    ]
];

require 'views/tasks.blade.php';