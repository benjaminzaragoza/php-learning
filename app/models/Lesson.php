<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 20/09/18
 * Time: 19:38
 */

class Lesson
{
    public $name;
    /**
     * Lesson constructor.
     * @param $name
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }
    public static function all (){
        $pdo  = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'lessons');

    }
}