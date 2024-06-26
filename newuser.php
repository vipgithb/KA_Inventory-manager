<<<<<<< HEAD:newuser.php
<?php 
include('connection.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .newuser-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
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

        p {
            text-align: center;
        }

        #message {
            font-weight: bold;
            font-size: xx-large;
            color: rgb(8, 3, 66);
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body id="EleM">
    <div id="message"></div>
    <div class="newuser-container">
        <h2 style="text-align: center;">Create New Account</h2>

        <form action="" method="post" id="createAccountForm" >
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <br><br>

            <input type="submit" value="Create Account">

            <p>Already a User <a href="Sign-In.php">Login Now</a></p>
        </form>
    </div>


    <!-- <script>
        function createAccount() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                document.getElementById('message').innerHTML = "Passwords do not match.";
                return false;
            }

            // Here you would typically make a request to your server to create the account
            // For the sake of this example, we'll just log the username and password to the console
            console.log("New Account Details:");
            console.log("Username: " + username);
            console.log("Password: " + password);

            document.getElementById('message').innerHTML = "Account created successfully!";
            return true; // Prevent the form from submitting
        }
    </script> -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $sql = "INSERT INTO user_info(`full_name`, `email`, `username`,`password`)";

  $sql .= " VALUES ('$fullname', '$email', '$username','$password');";

  $result = mysqli_query($con, $sql);
 
  if ($result) {
    header("location:Sign-In.php");
  } else {
    echo "Failed to Register";
  }
    }
    ?>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .newuser-container{
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
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
        p{
            text-align: center;
        }
        #message{
            font-weight: bold;
            font-size: xx-large;
            color: rgb(8, 3, 66);
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body id="EleM">
    <div id="message"></div>
    <div class="newuser-container">
        <h2 style="text-align: center;">Create New Account</h2>

        <form id="createAccountForm" onsubmit="return createAccount()">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <br><br>


            <input type="submit" value="Create Account">

            <p>Already a User <a href="./Sign-In.html">Login Now</a></p>
        </form>
    </div>


    <script>
        function createAccount() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                document.getElementById('message').innerHTML = "Passwords do not match.";
                return false;
            }

            // Here you would typically make a request to your server to create the account
            // For the sake of this example, we'll just log the username and password to the console
            console.log("New Account Details:");
            console.log("email: " + email);
            console.log("Password: " + password);

            document.getElementById('message').innerHTML = "Account created successfully!";
            return false; // Prevent the form from submitting
        }
    </script>
</body>
</html>
>>>>>>> 405f64326f05b8c6f3bd1e60ccd09e7aa88c8845:newuser.html
