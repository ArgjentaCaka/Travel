<?php
    if (isset($_POST['submit'])) {
        if(isset($_SESSION['id'])){

            $email = trim($_POST['email']);

            $emailPattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";

            if (empty($email)) {

                echo "<script>alert('Email cannot be blank')</script>";

            } else if (!preg_match ($emailPattern, $email)) {
        
                echo "<script>alert('Not a valid email!')</script>";     
     
            } else {

                $sql = "UPDATE register SET status=1 WHERE email='$email'";
                header("Refresh:0");

                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Record updated successfully!')</script>";
                } else {
                    echo "<script>alert('Error updating record!')</script>";
                }

                $conn->close();
            } 
        }    
    } else {
        echo "<script>alert('Submit button is not set')</script>";
    }
?>