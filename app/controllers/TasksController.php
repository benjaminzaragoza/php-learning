<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 5/10/18
 * Time: 18:36
 */

namespace App\Controllers;
use App\Models\Task;
use App\Framework\Router;

class TasksController
{
    public function index()
    {
        $tasks = Task::all();
        require view('tasks');
    }

    public function store()
    {
        $data=[
            'name' => "'".$_POST['name']."'"
        ];
        Task::create('tasks',$data);

        return Router::redirect('/tasks');
    }
}