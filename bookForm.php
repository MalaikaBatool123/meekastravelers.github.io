<?php

    $server = "localhost";
    $username = "root";
    $pass="";
    $db = "book_db";
    $connection = mysqli_connect($server, $username, $pass, $db);

    if (!$connection){
        die("connection to this db failed due to ".
        mysqli_connect_error());
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    $request = "INSERT INTO `book_form` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES ('$name','$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving');";


    if($connection->query($request)==true){
        // echo "successs";
        header('location:book.html');
    }
    else{
        echo "hello ERROR: $request <br> $connection->error";
    }


    $connection->close();

    
?>