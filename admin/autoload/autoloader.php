<?php
   spl_autoload_register(function($className){
        $dir = $_SERVER['DOCUMENT_ROOT']."/ticket/admin/model";
        $file = $dir.'/'.$className.'.php';

        
         include $file;
        
    });
    
?>