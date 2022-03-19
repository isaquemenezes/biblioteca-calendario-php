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
    
    }