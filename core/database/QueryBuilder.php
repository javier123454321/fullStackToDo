<?php

class QueryBuilder{
    
    protected $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass){
        $statement = $this->pdo->prepare('select * FROM '.$table);
        
        $statement-> execute();

        return $statement -> fetchAll(PDO::FETCH_CLASS, $intoClass);

    }

    public function insert($table, $fields, $parameters){
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES ('%s')", $table, $fields, $parameters
        );

        $statement = $this->pdo->prepare($sql);
        
        return $statement-> execute();

    }
}