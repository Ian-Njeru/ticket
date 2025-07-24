<?php
   spl_autoload_register(function($className){

     include "./../parse_url.php";


     $dir = $_SERVER['DOCUMENT_ROOT']."/ticket/".$type_of_user."/model";

     $file = $dir.'/'.$className.'.php';

     include $file;
        
    });
    
?>