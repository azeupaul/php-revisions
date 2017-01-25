<?php

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->findAll('todos');

        $tasks = array_map(function($task){
            $t = new Task($task->title);
            if($task->completed > 0){
                $t->complete();
            }
            return $t;
        }, $tasks);

        require 'views/index.view.php';
    }

    public function about()
    {
        require 'views/about.view.php';
    }

    public function contact()
    {
        require 'views/contact.view.php';
    }
}