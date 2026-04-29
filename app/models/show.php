<?php
    class show{
        private $db;
        public function __construct(){
            $this->db = (new Database())->connect();    
        }

        public function show(){
            return $query = mysqli_query($this->db,"SELECT * FROM pendataan_orangutan");
        }
    }
?>