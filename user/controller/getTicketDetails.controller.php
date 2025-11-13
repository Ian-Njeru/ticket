<?php
include "./../autoload/autoloader.php";

$incident_number = $_GET['incident_number'];
$getTicketDetails = new getTicketDetails();
$showTicketDetail = $getTicketDetails->showTicketDetails($incident_number);

//$data = array();
    if ($showTicketDetail) {
        foreach($showTicketDetail as $row) {
            $incident_id = $row['id'];
            $subject = $row['title'];
            $status = $row['status'];
            $created_on = $row['created_on'];
            $description = $row['description'];
            $image = $row['image'];
            echo"<div class='showTicketDetails active'>
                    <form>

                        <h2>Ticket</h2>
                        <div id='details-header'>";
                            if($status == 'pending'){
                                echo "<div id='pending' class='status'>Pending</div>";
                            }else if($status == 'active'){
                                echo "<div id='active'class='status'>Active</div>";
                            }else{
                                echo "<div id='closed'class='status'>Closed</div>";
                            }

                            echo "<div class='incidentId'>Incident Number:".$incident_id."</div>
                                <div class='date'>Opened On:".date('Y-m-d',strtotime($created_on))."</div>

                        </div>";
            
            echo "<label for='subject'>Subject</label><br>
                        <input type='text' name='subject' value='".ucwords($subject)."' disbaled/><br><br>

                        <label for='description'>Description</label><br>
                        <textarea name='description' id='' cols='30' rows='10' disabled>".$description."</textarea><br><br>

                        <img id='previewImg' src='".$image."' width='200px' height='300px'><br><br> 
                        
                        <label for='comment'>Comment</label><br>
                        <textarea name='comment' cols='30' rows='10' disabled></textarea>
                    </form>
                </div>";
        
        }
    }
