<?php
include "../db/connection.php";
    class getTicketDetails extends connection{
        public function __construct(){
            parent::__construct();
        }

        public function showTicketDetails($incident_number){
            $sql = "SELECT * FROM ticket WHERE id='$incident_number'";
            $query = $this->connection->query($sql);

            $result = $query->fetch_all(MYSQLI_ASSOC);

            return $result;

        }
}