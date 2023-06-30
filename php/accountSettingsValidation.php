<?php
    if (isset($_POST['submit'])) {
        if(isset($_SESSION['id'])){

            $id = $_SESSION['id'];
            $username = trim($_POST['username']);

            if (empty($username)) {
                
                echo "<script>alert('Username cannot be blank')</script>";
                
            } else {

                $sql = "UPDATE register SET username='$username' WHERE id='$id'";
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