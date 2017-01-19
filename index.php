<?php

require 'functions.php';
$greetings = 'Hello world';

/**
* Classe qui définit une tâche
*/
class Task
{
	protected $title;
	protected $completed;

	function __construct($title = null)
	{
		if($title){
			$this->title = $title;
		}
		
		$this->completed = false;
	}
}

$pdo = connectDb();
$tasks = allTasks($pdo);
dd($tasks);

require 'view/index.php';
