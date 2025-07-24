<?php
include "../db/connection.php";

    class auth extends connection{
        public function __construct(){
            parent::__construct();
        }

        public function user($username, $password){
            $stmt = "SELECT * FROM customer WHERE (name = '$username' OR email = '$username')
             AND password = '$password'";

            $query = $this->connection->query($stmt);
            if($query->num_rows == 1){
                $row = $query->fetch_assoc();
                $name = $row['name'];
                $user_id = $row['id'];
                
                    return 
                    [
                        'status'=>true,
                        'user'=>$user_id,
                        'name'=>$name
                    ];
            
            }else{
                return 
                [
                    'status'=>false,
                    'message'=>'Invalid username or password'
                ];
            }
        }

        
    }
?>