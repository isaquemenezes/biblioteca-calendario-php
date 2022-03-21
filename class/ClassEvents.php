<?php 
    namespace Classes;

    use Models\ModelConect;

    class ClassEvents extends ModelConect{
        
        #trazer os dados de events do db
        public function getEvents()
        {
            $conect_s = $this->conectDB()->prepare("select * from events");
            $conect_s->execute();
            $q=$conect_s->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($q);  //return por json 

        }

        #Criação da Consulta no db
        public function createEvent($id=0, $title, $description, $color='blue', $start, $end)
        {
            $query_insert = $this->conectDB()->prepare("insert into events values (?,?,?,?,?,?)");
            $query_insert->bindParam(1, $id, \PDO::PARAM_INT);
            $query_insert->bindParam(2, $title, \PDO::PARAM_STR);
            $query_insert->bindParam(3, $description, \PDO::PARAM_STR);
            $query_insert->bindParam(4, $color, \PDO::PARAM_STR);
            $query_insert->bindParam(5, $start, \PDO::PARAM_STR);
            $query_insert->bindParam(6, $end, \PDO::PARAM_STR);

            $query_insert->execute();


        }
    
    }