<?php
    class connection{
        private $servername = "localhost";
        private $user = "root";
        private $password = "";

        private $db = "support_ticket";

        protected $connection;

        public function __construct(){
            if(!isset($this->connection)){
               $this->connection = new mysqli($this->servername, $this->user, $this->password, $this->db); 
            }else{
                echo die."Cannot connect to the database";
            }

            return $this->connection;
        }
    }
?>