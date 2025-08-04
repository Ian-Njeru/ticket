<?php
    include "././controller/ticket.controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Ticket | Tickester</title>
</head>
<body>

    <?php
        include "sidenav.php";
            $success = $_SESSION['success']??'';
            $error = $_SESSION['error']??'';
            unset($_SESSION['success']);
                if($success){
                    echo htmlspecialchars($success);
                }else{
                    echo htmlspecialchars($error);
                }

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">

        <h4>Open a ticket</h4>

        <label for="subject">Subject</label><br>
        <input type="text" name="subject" placeholder="Enter the subject of your ticket" required><br><br>

        <label for="description">Description</label><br>
        <textarea name="description" id="" cols="30" rows="10" required></textarea><br><br>

        <label for="Files"></label>
        <input type="file" name="images[]" id="" multiple optional><br><br>

        <input type="submit" value="Open Ticket" name="submit">
    </form>
</body>
</html>