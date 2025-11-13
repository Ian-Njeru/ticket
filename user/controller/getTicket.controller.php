<?php
include "./../autoload/autoloader.php";
$id = $_SESSION['user_id'];
    $tickets = new getTicket();
    $showTicket = $tickets->showTicket($id);
    if($showTicket){
        foreach($showTicket as $row){
            $incident_id = $row['id'];
            $subject = $row['title'];
            $status = $row['status'];
            $created_on = $row['created_on'];
            //$new = $row['new'];
            echo "
            
                <tr>
                            <td>".$incident_id."</td>
                            <td><a href=\"details?incident_number=".$incident_id."\"  class=\"overview\">".ucwords($subject)."</a></td>
                            
                            <td>";if($status == 'pending'){
                                echo "<div id='pending' class='status'>Pending</div>";
                            }else if($status == 'active'){
                                echo "<div id='active'class='status'>Active</div>";
                            }else{
                                echo "<div id='closed'class='status'>Closed</div>";
                            }echo"</td>
                            
                            <td>".$created_on."</td>
                </tr>
            ";
        }
    }else{
        echo "
            <tr>
                <td colspan='4' style='text-align:center;'>No tickets found</td>
            </tr>
        ";
    }

    
    ?>