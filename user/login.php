<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login | Ticketer</title>
    <style>
        body {
            background: #f5f7fa;
            font-family: 'Segoe UI', Arial, sans-serif;
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
            min-width: 320px;
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
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1.2rem;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            font-size: 1rem;
            background: #f9fafb;
            transition: border 0.2s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #4f8cff;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 0.7rem;
            background: #4f8cff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background: #2563eb;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        
        <div>
            <div class="name"><p>Ticketer</p></div>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
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