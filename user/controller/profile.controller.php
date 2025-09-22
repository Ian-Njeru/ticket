<?php

include "./../autoload/autoloader.php";

$profile = new profile();

$id = $_SESSION['user_id'];

$result = $profile->personalDetails($id);

    $first_name = ucwords($result['first_name']);
    $last_name = ucwords($result['last_name']);
    $email = strtolower($result['email']);
    $phone = $result['contact'];

if(isset($_POST['save'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    
    $updatePersonalDetails = $profile->updatePersonalDetails($firstname, $lastname, $phone, $id);
    if($updatePersonalDetails == true){
        $_SESSION['success'] = $updatePersonalDetails['success'];
    }else{
        $_SESSION['failed'] = $updatePersonalDetails['failed'];
    }
        
        

}

$accountOverview = $profile->accountOverview($id);
    $email = strtolower($accountOverview ['email']);
    $password = $accountOverview ['password'];
    $status = $accountOverview['status'];


    if(isset($_POST['changeEmail'])){
        $email = $_POST['email'];
        $changeEmail = $profile->changeEmail($id, $email);
        if($changeEmail == true){
            $_SESSION['success'] = $changeEmail['success'];
            
        }else{
            $_SESSION['failed'] = $changeEmail['failed'];
            
        }
    }

if(isset($_POST['changePassword'])){
    $password = $_POST['password'];
    $changePassword = $profile->changePassword($id, $password);
    if($changePassword == true){
        $_SESSION['success'] = $changePassword['success'];
    }else{
        $_SESSION['success'] = $changePassword['success'];
    }
}


if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['verify'])){
    $verification_code = 'T-'.rand(0, 1000000);
    $emailVerification = $profile->emailVerification($id, $verification_code);

    if($emailVerification == true){
        $_SESSION['success'] = $emailVerification['success'];
        header('location: email-verification.php');
    }else{
        $_SESSION['failed'] = $emailVerification['failed'];
    }
}

$result = $profile->checkVerificationCode($id);

$name = $result['name'];
$id= $result['id'];
$verification_code = $result['verification_code'];
$email = $result['email'];

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['online_status'])){
    $onlineStatus = $_POST['online_status'];
    $delete = $profile->delete($id, $onlineStatus);
    
}

?>