<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 20/09/18
 * Time: 19:38
 */

class Task
{
 // Constructor
    public $name;
    public  $completed;
    /**
     * Task constructor.
     * @param $name
     * @param $completed
     */

    public function __construct($name='', $completed=false)
    {
        $this->name = $name; // this->esto,un mateix
        $this->completed=$completed;

    }
    public function complete()
    {
        $this->completed = true;
    }


}