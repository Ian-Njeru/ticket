<?php
include "../db/connection.php";
class profile extends connection {
    public function __construct(){
        parent::__construct();
    }

    public function personalDetails($id){
        $stmt = "SELECT * FROM customer_profile WHERE id = '$id'";  
        $query = $this->connection->query($stmt);

        if($query->num_rows == 1){
            $row = $query->fetch_assoc();
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $contact = $row['contact'];

            return [
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'email'=>$email,
                'contact'=>$contact
            ];
        }
    }

   public function updatePersonalDetails($firstname, $lastname, $phone, $id){
        $stmt = "UPDATE customer_profile SET first_name = '$firstname', last_name = '$lastname', contact = '$phone' WHERE id = '$id'";
        $query = $this->connection->query($stmt);
        if($query == true){
            return[
                'status'=> true,
                'success' => 'Record Updated Successfully'
            ];
        }else{
            return [
                'status'=> false,
                'failed'=>'Failed to update record'
            ];
        }

    }

    public function accountOverview($id){
        $stmt = "SELECT * FROM customer_login WHERE id = '$id'";
        $query = $this->connection->query($stmt);

        if($query->num_rows == 1){
            $row = $query->fetch_assoc();
            $email = $row['email'];
            $password = "**********";
            $status = $row['status'];

            return[
                'email'=>$email,
                'password'=>$password,
                'status'=>$status
            ];
        }
    }

    public function delete(){

    }
}

?>