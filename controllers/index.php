<?php

$tasks = $builder->findAll('todos');

$tasks = array_map(function($task){
    $t = new Task($task->title);
    if($task->completed > 0){
        $t->complete();
    }
    return $t;
}, $tasks);

require 'views/index.view.php';