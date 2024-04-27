<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"] {
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
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body id="EleM">
    <form id="forgotPasswordForm" onsubmit="return forgotPassword()">
        <h2 style="text-align: center;">Forgot Password</h2>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

        <input type="submit" value="Reset Password">
        <p style="text-align: center;"><a href="./Sign-In.php">Back to Login</a></p>
    </form>

    <div id="message"></div>

    <script>
        function forgotPassword() {
            var email = document.getElementById('email').value;

            // Here you would typically make a request to your server to reset the password
            // For the sake of this example, we'll just log the email to the console
            console.log("Reset Password Request:");
            console.log("Email: " + email);

            document.getElementById('message').innerHTML = "A password reset link has been sent to your email.";
            return false; // Prevent the form from submitting
        }
    </script>
</body>
</html>
