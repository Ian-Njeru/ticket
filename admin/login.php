<?php 
    
    include "././controller/auth.controller.php";
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login | Ticketer</title>
</head>
<body>
    <?php
    $error = $_SESSION['error']??'';
    unset($_SESSION['error']);
        if($error){
            echo htmlspecialchars($error);
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        
        <div>
            <div class="name"><p>Ticketer</p></div>
            
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter username or email address">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="login"></label>
                <input type="submit" value="Login" name="login">
            </div>
        </div>
    </form>
</body>
</html>