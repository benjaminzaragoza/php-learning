<?php

$router = new Router();

return [
    '' => 'app/controllers/PagesController',
    '/' => 'app/controllers/tasks.php',
    '/tasks' => 'app/controllers/tasks.php',
    '/people' => 'app/controllers/people.php',
    '/lessons' => 'app/controllers/lessons.php',
    '/about' => 'PageController@show',
    '/contact' => 'app/controllers/contact.php'
];