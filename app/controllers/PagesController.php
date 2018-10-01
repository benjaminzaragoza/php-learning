<?php


class PagesController
{
    public function tasks()
    {
        $tasks = Task::all();

        require view('tasks');
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
