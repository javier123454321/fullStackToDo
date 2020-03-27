<?php

require (__DIR__.'/../config.php');

Class Connection{
    
    public static function make($CONFIG){

         try{
            return $pdo = new PDO(
                $CONFIG['SQLServer'].'dbname=' . $CONFIG['DBName'],
                $CONFIG['username'], 
                $CONFIG['password'],
                $CONFIG['options']
            );

         }catch (PDOException $e){
            die($e->getMessage());
         }
    } 

}
