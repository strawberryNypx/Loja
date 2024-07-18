<?php
    ini_set("display_errors","on");
    class Conexao{

        private $conn;

        function __construct(){
            $host ="localhost";
            $dataBase = "Loja";
            $user = "Anid";
            $senha = "anid0001";
            $conn = mysqli_connect($host , $user , $senha , $dataBase);
    
            $this->conn = $conn;
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }  
        }

        public function insert($query) {
            return $this->conn->query($query);
        }

        public function update($query) {
            return $this->conn->query($query);
        }

        public function select($query) {
            return $this->conn->query($query);
        }
       
    }
    
?>