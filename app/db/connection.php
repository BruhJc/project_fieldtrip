<?php
    class Database{
        public function connect(){
            return mysqli_connect("localhost","root","","orangutanhaven");
        }
    }
?>