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

	function __construct($title)
	{
		$this->title = $title;
		$this->completed = false;
	}
}

$pdo = connectDb();
dd($pdo);

require 'view/index.php';
