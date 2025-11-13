<?php
include "../db/connection.php";
    class getTicket extends connection{
        public function __construct(){
            parent::__construct();
        }

        
        public function showTicket($id){
            $sql = "SELECT * FROM ticket WHERE created_by='$id'";
            $query = $this->connection->query($sql);
            //$sql = $query->get_result();

            $result = $query->fetch_all(MYSQLI_ASSOC);
        
            return $result;

            
        }

        public function showTicketDetails($incident_number){
            $sql = "SELECT * FROM ticket WHERE id='$incident_number'";
            $query = $this->connection->query($sql);

            $result = $query->fetch_all(MYSQLI_ASSOC);

            return 
                $result;
            

        }
    }