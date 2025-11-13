<?php
    include "./../session/session_start.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.7.1.js"></script>
    <!--<script src="js/pathname.js"></script>//-->
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style\global.css">
    <link rel="stylesheet" href="style\sidenav.css">
    <link rel="stylesheet" href="style\home.css">
    <link rel="stylesheet" href="style\ticket.css">
    <link rel="stylesheet" href="style\details.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
    <title>Details | Ticket</title>
</head>
<body>
    <div class="home">
        <?php include "sidenav.php";?>

        <div class="body">
            <?php 
                include "././controller/getTicketDetails.controller.php"; 
            ?>
        </div>
    </div>
</body>
</html>
