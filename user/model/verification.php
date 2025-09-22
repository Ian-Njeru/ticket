<?php
include "../db/connection.php";
class verification extends connection {
    public function __construct(){
        parent::__construct();
    }

    public function checkVerificationCode($id, $name, $verification_code){
        $stmt = "UPDATE customer_login SET status = 'verified' WHERE id = '$id' AND verification_code = '$verification_code'";  
        $query = $this->connection->query($stmt);

        if($query == true){
            return [
                'status'=>true,
            ];
        }
    }
}
?>