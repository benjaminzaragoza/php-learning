<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 25/09/18
 * Time: 19:16
 */
class Router
{
    private static $routes = [];

    public static function routes()
    {
        return self::$routes;
    }

    public static function define($routes)
    {
        self::$routes= $routes;
    }

    public static function direct($uri = null)
    {
        if (!$uri) return 'controllers/tasks.php';

        //      NO ESTATIC  $this->routes; STATIC self::$routes
        if (array_key_exists($uri,self::$routes)) return self::$routes[$uri];
        throw new Exception('La pàgina que demaneu no existeix');
    }


//                    '/' => 'controllers/tasks.php',
//            '/tasks' => 'controllers/tasks.php',
//            '/people' => 'controllers/people.php',
//            '/lessons' => 'controllers/lessons.php',
//            '/about' => 'controllers/about.php',
//            '/contact' => 'controllers/contact.php'
//
//    ];

}