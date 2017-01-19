<?php

require 'class/Task.php';

$builder = require 'bootstrap.php';

$tasks = $builder->findAll('todos');

$tasks = array_map(function($task){
    $t = new Task($task->title);
    if($task->completed > 0){
        $t->complete();
    }
    return $t;
}, $tasks);

require 'view/index.php';
