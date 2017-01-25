<?php

namespace App\Controllers;

use App\Core\App;
use App\Model\Task;

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

        return  view('home', compact('tasks'));
    }

    public function about()
    {
        return  view('about');
    }

    public function contact()
    {
        return  view('contact');
    }
}