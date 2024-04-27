<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
            background-image: url('./images/bg-image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .forgot-password,
        .Sign-Up {
            text-align: center;
            margin-top: 10px;
        }
        .forgot-password a,
        .Sign-Up a {
            color: #007bff;
            text-decoration: none;
        }
        #username,
        #password{
            width: 280px;
        }
        input[type="submit"]{
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="body">
    <div class="login-container">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required >
            </div>
            <input type="submit" value="Login"/> 
        </form>
        <div class="forgot-password">
            <a href="./forgotpass.php">Forgot password?</a>
        </div>
        <div class="Sign-Up">New User/
            <a href="./newuser.php">Sign-Up</a>
        </div>
    </div>
    <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM user_info WHERE username='" . $username . "'";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_array($result);
              $hashedPassword = $row['password'];

              if (password_verify($password, $hashedPassword)) {
                $_SESSION["full_name"] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION["username"] = $row['username'];

                header("location:index.php");
              } else {
                echo '<div>Authentication failed. Invalid password</div>';
              }
            } else {
              echo '<div>Authentication failed. Invalid username or password</div>';
            }
    }
    ?>
</body>
</html>
