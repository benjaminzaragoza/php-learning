<?php

namespace App\Controllers;
use App\Models\Lesson;
use App\Models\Person;
use App\Models\Task;
class PagesController
{
    public function tasks()
    {
        $tasks = Task::all();
        require view('tasks');
    }
    public function people()
    {
        $people = Person::all();
        require view('people');
    }
    public function lessons()
    {
        $lessons = Lesson::all();
        require view('lessons');
    }
    public function about()
    {
        require view('about');
    }
    public function contact()
    {
        require view('contact');
    }

}
