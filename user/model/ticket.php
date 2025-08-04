<?php
    include "../db/connection.php";
    class ticket extends connection{
        public function __construct(){
            parent::__construct();
        }

        public function ticket($subject, $description, $images){

            $sql = "INSERT INTO ticket (title, description, image) VALUES ('$subject', '$description', '$images')";

            $stmt = $this->connection->query($sql);

            if($stmt == true){
                return[
                    'status'=> true,
                    'message'=>'Ticket opened successfully!'
                ];
            }else{
                return [
                    'status'=> false,
                    'message'=>'Error. Try again'
                ];
            }

        }
    }
?>