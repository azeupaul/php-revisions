<?php

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