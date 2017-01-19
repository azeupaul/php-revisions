<?php

function dd($data)
{
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

function connectDb()
{
	try{

		return new PDO('mysql:host=localhost;dbname=revisions', 'root', 'root');
	}catch(PDOException $e){
		die($e->getMessage());
	}
}