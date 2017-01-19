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

$task = new Task('Learn PHP');
dd($task);

require 'view/index.php';
