<?php
include "../db/connection.php";

    class auth extends connection{
        public function __construct(){
            parent::__construct();
        }

        public function user($username, $password){
            $stmt = "SELECT * FROM customer_login WHERE (name = '$username' OR email = '$username') AND password = '$password' AND online_status != 'deleted'";

            $query = $this->connection->query($stmt);
            if($query->num_rows == 1){
                $row = $query->fetch_assoc();
                $name = $row['name'];
                $user_id = $row['id'];
                $online_status = $row['online_status'];
                if($online_status != 'deleted'){
                    return[
                        'status'=>true,
                        'user_id'=>$user_id,
                        'name'=>$name
                    ];
                }else{
                    return 
                    [
                        'status'=>false,
                        'message'=>'No account found.'
                        
                    ];
                }
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