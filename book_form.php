<?php

    $connection = mysqli_connect('localhost', 'root', '', 'byh_db');

    if(isset($_POST['send'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        

        $request = "INSERT INTO application(name, email, phone, address, status) VALUES ('$name','$email','$phone','$address', 1)";

        mysqli_query($connection, $request);

        header('location:book.php');
            
        }
        else{
            echo 'something went wrong try again';
        }


?>