<?php
session_start();
if ($_SESSION['login'] != true)
{
    header("location: 3.html");
}
else 
{
    echo '<!DOCTYPE html>
    <html>
    
    <head>
        <title>My Simple Webpage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head> 
    <body>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">logging successfully</h4>
        </div>
        <div class="carousel-item active">
            <img class="d-block w-100" src="img1.jpg" alt="First slide">
        </div>
    </body>
    </html>';
}
?>