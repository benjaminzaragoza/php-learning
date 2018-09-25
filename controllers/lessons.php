<?php
//require 'models/Lesson.php';
//require 'framework/database/connect.php';
//$pdo = connect();
//$statement = $pdo->prepare('SELECT * FROM lessons;');
//$statement->execute();
//$lessons = $statement->fetchAll(PDO::FETCH_CLASS);
//$lessons = fetchAll('lessons');
//require 'views/lessons.blade.php';

$lessons = Lesson::all();

require view('lessons',$lessons);