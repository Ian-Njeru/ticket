<?php
    session_start();
    include "./../autoload/autoloader.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $auth = new auth();    
        $result = $auth->user($_POST['username'], $_POST['password']);

        if($result['status']){
                $username = $_SESSION[$result['name']];
                $_SESSION['user_id'] = $result['user'];
               header('location:home');
                
        }else{
                $_SESSION['error']=$result['message'];
        }
    }
?>