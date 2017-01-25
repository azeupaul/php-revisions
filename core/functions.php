<?php

function dd($data)
{
	die(var_dump($data));
}

function view($file, $datas = [])
{
	extract($datas);

	return require "app/views/{$file}.view.php";
}

