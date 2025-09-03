<?php
 session_start();
    
    if(!isset($_SESSION['user_id'])&& !isset($_SESSION['username'])){
        header('location:login');
        exit;
    }
?>