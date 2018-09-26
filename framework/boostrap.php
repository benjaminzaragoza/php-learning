<?php

//$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'config.php';

App::bind('config',require 'config.php');

$routes = require 'app/routes.php';
Router::define($routes);

//return new QueryBuilder(
//    Connection::connect($config['database'])
//);