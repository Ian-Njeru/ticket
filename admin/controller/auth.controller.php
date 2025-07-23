<?php
    session_start();
    include "./autoload/autoloader.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $auth = new auth();    
        $result = $auth->user($_POST['username'], $_POST['password']);

        if($result['status']){
                $username = $_SESSION[$result['username']];
                $_SESSION['user_id'] = $result['user'];
               header('location:dashboard');
                
        }else{
                $_SESSION['error']=$result['message'];
        }
    }
?>