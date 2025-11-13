<?php
    include "../db/connection.php";
    class ticket extends connection{
        public function __construct(){
            parent::__construct();
        }

        public function ticket($subject, $description, $images, $id){

            $sql = "INSERT INTO ticket (title, description, image, created_on, created_by, status) VALUES ('$subject', '$description', '$images', now(), $id, 'pending')";

            $stmt = $this->connection->query($sql);

            if($stmt == true){
                return[
                    'status'=> true,
                    'message'=>'Ticket opened successfully!'
                ];
            }else{
                return [
                    'status'=> false,
                    'message'=>'Error. Try again'
                ];
            }

        }

       /* public function showTicket($id){
            $sql = "SELECT * FROM ticket WHERE created_by='$id'";
            $query = $this->connection->query($sql);
            //$sql = $query->get_result();

            $result = $query->fetch_all(MYSQLI_ASSOC);
        
            return $result;

            /*if($query->num_rows > 0){
                
                while($row = $query->fetch_all(MYSQLI_ASSOC)){
                    
                    $incident_id = $row['id'];
                    $subject = $row['title'];
                    $status=$row['status'];
                        $created_on= date('Y-m-d', strtotime($row['created_on']));
                        $created_on_date_only = date('d', strtotime($row['created_on']));
                        $currentDate = date('d');
                        $tickets = [];
                        if($currentDate - $created_on_date_only < 7){
                            $tickets[] =  [
                                'incident_id'=> $incident_id,
                                'subject'=>$subject,
                                'status'=>$status,
                                'created_on'=>$created_on,
                                'new'=>'New'
                            ];
                        }else{
                            $tickets[] = [
                                'incident_id'=> $incident_id,
                                'subject'=>$subject,
                                'status'=>$status,
                                'created_on'=>$created_on,
                                'new'=>''
                            ];
                        }
                }
                    
            }
            return $tickets;
        }*/
    }
?>