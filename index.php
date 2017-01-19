<?php

require 'database/Connector.php';
require 'database/QueryBuilder.php';
require 'functions.php';
require 'class/Task.php';
$greetings = 'Hello world';



$instance = Connector::make();
$builder = new QueryBuilder($instance);

$tasks = $builder->findAll('todos');

$tasks = array_map(function($task){
    $t = new Task($task->title);
    if($task->completed > 0){
        $t->complete();
    }
    return $t;
}, $tasks);

require 'view/index.php';
