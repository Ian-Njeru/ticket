<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Deleted | Ticket</title>
    <script src="js/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style\global.css">
    <link rel="stylesheet" href="style\delete.css">
</head>
<body>
<?php
    include "./../session/session_destroy.php";
    
?>
<div class="bar">
    <div class="img"><img src="assets/logo.png" alt=""></div>
</div>

<div class="deleted-success-message">
    <div class="header">
        <div class="icon">
            <i class="fa fa-trash"></i>
        </div>

        <div class="title">
            Profile Deleted
        </div>
    </div>

    <div class="body">
        <div class="par">
            We appreciate the time you spent with us and respect your decision. Should you wish to return in the future, we would be pleased to welcome you back. 
        </div>
    </div>
</div>
</body>
</html>