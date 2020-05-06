<?php
    class Data{
        private $mysqli;
        public function __construct($conn)
        {
            $this->mysqli = $conn;
        }

        public function show($id=null){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM buku";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function tampil_urutan($sort,$field){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM buku ORDER BY $field $sort";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
        public function tampil_saring($q,$column){
            $db = $this->mysqli->connection;
            $sql = "SELECT * FROM buku WHERE $column LIKE '%$q%'";
            $query = $db->query($sql) or die($db->error);
            return $query;
        }
    }
?>