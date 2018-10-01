<?php

class Connection
{
//    public static function connect($config)
//    public static function connect()
//    {

//        $database = config('database');
//        try {
//
//            return new PDO(
//               $config['connection'].'; dbname='.$config['name'],
//                $config['username'],
//                $config['password'],
//               $config['options']
//           return new PDO('$config:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XZvcnv9GqJ3DXLXl');
//            return new PDO($database['type'] . ':host=' . $database['host'] . ';dbname=' . $database['name'], $database['user'], $database['password']);
//
//            return new PDO($database['type'].':host='.$database['host'].';dbname='.$database['name'],$database['user'],$database['password']);
//
//            );
//        } catch (\PDOException $e) {
//            die('Could not connect: ' . $e);
//        }
//    }
//}
    public static function connect()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php_learning', 'debian-sys-maint', 'XZvcnv9GqJ3DXLXl');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}
