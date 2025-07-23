<?php
include "../db/connection.php";

    class auth extends connection{
        public function __construct(){
            parent::__construct();
        }

        public function user($username, $password){
            $stmt = "SELECT * FROM user WHERE (username = '$username' OR email = '$username')
             AND password = '$password'";

            $query = $this->connection->query($stmt);
            if($query->num_rows == 1){
                $row = $query->fetch_assoc();
                $username = $row['username'];
                $user_id = $row['id'];
                
                    return 
                    [
                        'status'=>true,
                        'user'=>$user_id,
                        'username'=>$username
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