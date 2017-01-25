<?php

function dd($data)
{
	die(var_dump($data));
}

function view($file)
{
	return require "views/{$file}.view.php";
}

