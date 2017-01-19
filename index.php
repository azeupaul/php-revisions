<?php

require 'database/Connector.php';
require 'database/QueryBuilder.php';
require 'class/Task.php';
$greetings = 'Hello world';



$instance = Connector::make();
$builder = new QueryBuilder($instance);

$tasks = $builder->findAll('todos');


require 'view/index.php';
