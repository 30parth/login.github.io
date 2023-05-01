<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) 
    {
        die("Could not connect to server");
    }
    else 
    {
        session_start();
        $username = $_SESSION['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($cpassword == $password) 
        {
            $sql = "UPDATE `user` SET `password`= '$password' WHERE username = '$username'";
            $result = mysqli_query($conn , $sql);
            if ($result)
            {
                header("location: p3.html");
            }
        }
}
