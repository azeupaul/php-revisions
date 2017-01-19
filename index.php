<?php

require 'functions.php';
$greetings = 'Hello world';

$task = [
	'title'       => 'Revise your PHP base',
	'due'         => 'today',
	'assigned_to' => 'Pablo',
	'completed'   => false
];

dd($task);

require 'view/index.php';
