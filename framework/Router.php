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

    public static function direct($uri,$requestType)
    {

        if (!$uri) return 'app/controllers/tasks.php';
        echo 866;
        //      NO ESTATIC  $this->routes; STATIC self::$routes
        if (array_key_exists($uri, self::$routes[$requestType])) {


//        die(self::$routes[$requestType][$uri]);
        return self::callAction(
            explode('@', self::routes[$requestType][$uri])

        );
        }
        echo 1;
        throw new Exception('La pàgina que demaneu no existeix');
    }

    protected function callAction($controller,$action)
    {
            if(!method_exists($controller,$action)){
                throw new Exception(
                    "{$controller} does not respond to the action "
                );
            }

return (new $controller)->$action();
    }
    public function execute($controller,$method)
    {
        $controller=new $controller();
        $controller->$method();
        
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