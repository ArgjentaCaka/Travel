<?php

    if (isset($_POST['submit'])){

        // Marrja e te dhenave per POST
        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);

        include "connection.php";

        $emailPattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        $phonePattern = "^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$^";

        if (empty($firstName)) {
            
            echo "<script>alert('First Name cannot be blank')</script>";
            
        } else if (is_numeric($firstName)) {

            echo "<script>alert('First Name cannot be numeric only')</script>";

        } else if (empty($lastName)) {
        
            echo "<script>alert('Last Name cannot be blank')</script>";

        } else if (is_numeric($lastName)) {
        
            echo "<script>alert('Last Name cannot be numeric only')</script>";

        } else if (empty($email)) {
            
            echo "<script>alert('Email cannot be blank')</script>";

        } else if (!preg_match ($emailPattern, $email)) {
        
            echo "<script>alert('Not a valid email!')</script>";

        } else if (empty($phone)) {

            echo "<script>alert('Phone cannot be blank')</script>";
        
        } else if (!preg_match ($phonePattern, $phone)) {

            echo "<script>alert('Not a valid phone number!')</script>";

        } else if (empty($message)) {

            echo "<script>alert('Message cannot be blank')</script>";

        } else if (strlen($message) > 200) {
        
            echo "<script>alert('Maximum message length is 200 characters')</script>";

        } else {

            // Isertimi i te dhenave ne DB
            $insert = "INSERT INTO `contactus` (`firstName`, `lastName`, `email`, `phone`, `message`) VALUES ('$firstName', '$lastName', '$email', '$phone', '$message')";

            // Verifikimi i suksesit te insertimit
            $rs = mysqli_query($conn, $insert);

            if($rs)
            {
                echo "<script>alert('Message sent successfully!')</script>";
            } else 
            {
                echo "<script>alert('Message not sent!')</script>";
            }

        }

    } else {
        echo "<script>alert('Submit button is not set')</script>";
    }
    
?>