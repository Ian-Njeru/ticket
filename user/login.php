<?php
     include "././controller/auth.controller.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login | Ticketer</title>
    <style>

        body {
            background:rgb(245, 247, 250);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 2rem 2.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.08);
            
        }

        .form{
            margin: 20px;
        }

        .name p {
            font-size: 2rem;
            font-weight: bold;
            color: #2d3e50;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.3rem;
            color: #34495e;
            font-size: 1rem;
        }
        input[type="text"],
        input[type="password"] {
            
            padding: 0.6rem;
            margin-bottom: 1.2rem;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 1rem;
            background: #f9fafb;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #4f8cff;
            outline: none;
        }
        input[type="submit"] {
            width: auto;
            padding: 0.7rem;
            background: #4f8cff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #2563eb;
        }
    
    </style>
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
        
        <div class="form">
            <div class="name"><p>Ticketer</p></div>
            <div class="input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input">
                <label for="login"></label>
                <input type="submit" value="Login" name="login">
            </div>
        </div>
    </form>
</body>
</html>