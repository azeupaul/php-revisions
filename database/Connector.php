<?php

class Connector
{
    public static function make()
    {
        try{

            return new PDO('mysql:host=localhost;dbname=revisions', 'root', 'root');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}