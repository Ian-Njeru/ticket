<?php
    include "session/session_start.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Tickester</title>
    <link rel="stylesheet" href="style/sidenav.css">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
    
    <script src="js/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
</head>
<body>
    <div class="dashboard">
        <?php include "sidenav.php";?>
         
        <div class="body">
               
            <div class="body-section">

                <div class="your-tickets">
                    <div class="title">Your active tickets</div>
                    <div class="ticket-container">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>Ticket No.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>


                        </table>
                    </div>
                </div>

                <div class="all-tickets">
                    <div class="title">All Tickets</div>
                    <div class="ticket-container" id="all-tickets">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>Ticket No.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>

                            
                        </table>    
                    </div>
                </div>
            </div>

                <div class="side-section">
                    <div class="my-tickets">
                        <div class="title">My Tickets</div>
                        <div class="ticket-container" id="my-tickets">
                            <table class="display">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="calendar">
                        <div class="title">Calendar</div>
                        <div class="calendar-container">
                            <table id="calendar">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        </div>      
    </div>
<script>
    $(document).ready(function(){
        $('.display').DataTable({
            info: false,
            ordering: false,
            paging: false,
            searching: false,
            language:{
                emptyTable: "No ticket(s) available"
            }
        });

        $('#calendar').DataTable({
            info: false,
            ordering: false,
            paging: false,
            searching: false,
            language:{
                emptyTable: "No schedule created"
            }
        });
        
    });
</script>
</body>
</html>