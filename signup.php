<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Could not connect to server");
    }
    else {
        $email = $_POST['Email'];
        $fruit = $_POST['Fruit'];
        $username = $_POST['Username'];
        $password = $_POST['password']; 
        $cpassword = $_POST['cpassword'];
        
        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $result = mysqli_query($conn , $sql);
        $num = mysqli_num_rows($result);
        if($num > 0)
        {
            header("location: si.html");
        }
        else 
        {
            if($cpassword == $password)
            {
                $sql = "INSERT INTO `user` (`email`,`fruit`, `username`, `password`) VALUES ('$email', '$fruit', '$username', '$password');";
                $result = mysqli_query($conn , $sql);
                if($result)
                {
                    header("location: 2.html");
                }   
            }
        }
    }
?>