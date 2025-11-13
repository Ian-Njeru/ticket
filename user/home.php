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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
    <title>Home | Ticket</title>
</head>
<body>
    <div class="home">
        <?php include "sidenav.php";?>

        <div class="body">
            <!--<div class="search">
                <input type="search" name="search" id="search" placeholder="Search your tickets">
            </div>-->

            <div class="tickets">
                <table id="tickets">
                    <thead>
                        <tr>
                            <th>Incident Number</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include "././controller/getTicket.controller.php"; 
                            #include "././controller/getTicketDetails.controller.php"
                        ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>        
    </div>

    <script>
        DataTable.type('num', 'className', 'dt-left');
        DataTable.type('num-fmt', 'className', 'dt-left');
        DataTable.type('date', 'className', 'dt-left');
        new DataTable('#tickets', {
            ordering: false,
        });
    </script>
</body>
</html>