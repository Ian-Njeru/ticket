<?php
    include "./../session/session_start.php";
    include "././controller/ticket.controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/pathname.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style\global.css">
    <link rel="stylesheet" href="style\sidenav.css">
    <link rel="stylesheet" href="style\open-ticket.css">

    <title>Open Ticket | Ticket</title>
</head>
<body>

<div class="open-ticket">


    <?php
        include "sidenav.php";
            $success = $_SESSION['success']??'';
            $error = $_SESSION['error']??'';
            unset($_SESSION['success']);
                if($success){
                    #echo htmlspecialchars($success);
                    echo '<script>
                                Swal.fire({
                                    title: "Success",
                                    text: "'.$success.'",
                                    icon: "success"
                                }).then((result)=>{
                                    window.location.href = "./open-ticket";
                                    });
                        </script>';
                }else{
                    echo htmlspecialchars($error);
                }

    ?>

    <div class="body">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">

            <h2>Open a ticket</h2>

            <label for="subject">Subject</label><br>
            <input type="text" name="subject" placeholder="Enter the subject of your ticket" required><br><br>

            <label for="description">Description</label><br>
            <textarea name="description" id="" cols="30" rows="10" required></textarea><br><br>

            <label for="Files"></label>
            <input type="file" name="images[]" id="" onchange="previewFile(this);" multiple optional><br><br>

            <img id="previewImg" src=""><br><br>

            <input type="submit" value="Open Ticket" name="submit">
            <input type="reset" value="Clear Form" id="reset">

            
        </form>
    </div>
</div>

<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result).css({
                    "width": "150px",
                    "height": "200px"
                });
            }
 
            reader.readAsDataURL(file);
        }
    }

    $('#reset').on('click', function(){
        $('#previewImg').attr("src", '').css({
            "width":"0",
            "height":"0"
        });
    })

    
</script>
</body>
</html>