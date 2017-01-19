<?php

require 'database/Connector.php';
require 'functions.php';
require 'class/Task.php';
$greetings = 'Hello world';



$pdo = Connector::make();
$tasks = allTasks($pdo);

require 'view/index.php';
