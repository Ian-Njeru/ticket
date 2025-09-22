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

    public function changeEmail($id, $email){
        $stmt = "UPDATE customer_login,customer_profile SET customer_login.email='$email',customer_profile.email='$email' WHERE customer_profile.id =$id AND customer_profile.id=$id";
        $query = $this->connection->query($stmt);

        if($query == true){
            return[
                'status'=> true,
                'success' => 'Email Updated Successfully.'
            ];
        }else{
            return [
                'status'=> false,
                'failed'=>'Failed to update email.'
            ];
        }
    }

    public function changePassword($id, $password){
        $stmt = "UPDATE customer_login SET password='$password' WHERE id =$id ";
        $query = $this->connection->query($stmt);

        if($query == true){
            return[
                'status'=> true,
                'success' => 'Password Changed Successfully.'
            ];
        }else{
            return [
                'status'=> false,
                'failed'=>'Failed to change Password.'
            ];
        }
    }

    public function emailVerification($id, $verification_code){
        $stmt = "UPDATE customer_login SET verification_code = '$verification_code' WHERE id = $id";
        $query = $this->connection->query($stmt);

        if($query == true){
            return [
                'status'=>true,
                'success' => 'We have sent you a verification email. Please check your inbox (or spam folder) and click on the link to activate your account.'
            ];
        }
    }

    public function checkVerificationCode($id){
        $stmt = "SELECT * FROM customer_login WHERE id = '$id'";  
        $query = $this->connection->query($stmt);

        if($query->num_rows == 1){
            $row = $query->fetch_assoc();
            $name = $row['name'];
            $id=$row['id'];
            $email = $row['email'];
            $verification_code = $row['verification_code'];

            return [
                'id'=>$id,
                'name'=>$name,
                'email'=>$email,
                'verification_code'=>$verification_code
            ];
        }
    }
    public function delete($id, $onlineStatus){
        $stmt = "UPDATE customer_login SET customer_login.online_status = '$onlineStatus' WHERE customer_login.id =$id ";
        $query = $this->connection->query($stmt);

        if($query == true){
            return[
                'status'=>true
            ];
        }
    }
}

?>