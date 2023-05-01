<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($servername, $username, $password , $database);
    if (!$conn) {
        die("Could not connect to server");
    }
    else {
        $username = $_POST['Username'];
        $fruit = $_POST['Fruit'];

        $sql = "SELECT * FROM user WHERE username = '$username' AND fruit = '$fruit' ;";
        $result = mysqli_query($conn , $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1)
        {
            header("location: recreate.html");
            session_start();
            $_SESSION['username'] = $username;
        }
        else 
        {
            header("location: newpassr.html");
        }
    }
?>