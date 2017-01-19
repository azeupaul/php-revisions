<?php

require 'functions.php';
require 'class/Task.php';
$greetings = 'Hello world';



$pdo = connectDb();
$tasks = allTasks($pdo);

require 'view/index.php';
