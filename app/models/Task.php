<?php

namespace App\Models;

/**
* Classe qui définit une tâche
*/
class Task
{
	protected $title;
	protected $completed;

	public function __construct($title = null)
	{
		if($title){
			$this->title = $title;
		}
		
		$this->completed = false;
	}

	/**
	 * Getter for title
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Getter for completed
	 */
	public function isComplete()
	{
		return $this->completed;
	}

	/**
	 * Setter for title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * Mark task as complete
	 */
	public function complete()
	{
		$this->completed = true;
	}
}