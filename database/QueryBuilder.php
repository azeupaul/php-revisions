<?php

class QueryBuilder
{
    protected $db_instance;

    public function __construct(PDO $instance)
    {
        $this->db_instance = $instance;
    }

    public function findAll($table)
    {
        $query = $this->db_instance->prepare('SELECT * FROM {$table}');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS);
    }
}