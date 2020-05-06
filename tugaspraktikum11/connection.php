<?php
    class Koneksi
    {
        public $connection;
        public function __construct(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $database = "tugas11";
            $this->connection = new mysqli($host,$user,$pass,$database) or die(mysqli_error());
            if(!$this->connection){
                 return false;
            }else{
                return true;
            }
        }
    }

?>