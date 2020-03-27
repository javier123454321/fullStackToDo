<?php

    class Task {
        public $description;
        public $completed;
        public $created_on;
        public $finish_by;

        public function complete(){
            $this -> completed = true;
        }

        public function setFinishDate($date_object){
            $this -> finish_by = $date_object;
        }

    }

?>
