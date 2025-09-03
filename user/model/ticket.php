<?php
    include "../db/connection.php";
    class ticket extends connection{
        public function __construct(){
            parent::__construct();
        }

        public function ticket($subject, $description, $images){

            $sql = "INSERT INTO ticket (title, description, image, created_on) VALUES ('$subject', '$description', '$images', now())";

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