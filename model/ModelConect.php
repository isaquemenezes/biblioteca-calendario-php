<?php 
    namespace Models;

    //case de teste 
    class ModelConect{        
    // abstract class ModelConect{
        //case de teste 
        public function conectDB()
        // protected function conectDB()
        {
            try{
                $conector = new \PDO("mysql:host=".HOST.";dbname=".DB."",USER,PASSWORD);
                return $conector;
            }catch (\PDOException $err){
                return $err->getMessage();
            }

        }
    }