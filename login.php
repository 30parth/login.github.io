<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Could not connect to server");
} else {
    $user = $_POST['Username'];
    $pass = $_POST['password'];

    $sql = "Select * from user where username = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1)
    {
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['username'] = $user;
        header("location: welcome.php");
    }
    else
    {
        header("location:lo.html");
    }
}