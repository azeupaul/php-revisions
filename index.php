<?php

require 'functions.php';
require 'class/Task.php';
$greetings = 'Hello world';



$pdo = connectDb();
$tasks = allTasks($pdo);
dd($tasks);

require 'view/index.php';
