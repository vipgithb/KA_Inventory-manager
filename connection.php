<?php
$user = "root";
$servername = "localhost";
$password = "";
$dbname = "invm";
$con = mysqli_connect($servername, $user, $password, $dbname);
if ($con->connect_errno) {
    die("Connection Failed " . mysqli_connect_errno());
}