<?php
session_start();
include "./../autoload/autoloader.php";
    $tickets = new ticket();

    if(isset($_POST['submit'])){
        $subject = $_POST['subject'];
        $description =$_POST['description'];
        $uploadDir = "img/";
        foreach ($_FILES['images']['name'] as $key => $name) {
            $tmp_name = $_FILES['images']['tmp_name'][$key];
            $error = $_FILES['images']['error'][$key];

            if ($error === UPLOAD_ERR_OK) {
                $filePath = $uploadDir . basename($name);

                    

                if (move_uploaded_file($tmp_name, $filePath)) {

                        $result = $tickets->ticket($subject, $description, $filePath);
                    
                            if($result['status']==true){
                                $_SESSION['success'] = $result['message'];
                                //header('location:open-ticket');
                            }else{
                                $_SESSION['error'] = $result['message'];
                                //header('location:open-ticket');
                            }
                }
            }
        }
        
    }
?>