<?php
    if (isset($_POST['submitChangePass'])) {
        if(isset($_SESSION['id'])){

            $id = $_SESSION['id'];

            $oldPassword = trim($_POST['oldPassword']);
            $newPassword = trim($_POST['newPassword']);
            $newPassword2 = trim($_POST['newPassword2']);

            $queryPass = "SELECT * FROM register WHERE id='$id'";
            $query_run = mysqli_query($conn,$queryPass);
            $user_data = mysqli_fetch_assoc($query_run);
            $dbPass = $user_data['password'];
        
            if (empty($oldPassword)) {
                
                echo "<script>alert('Old Password cannot be blank')</script>";
                
            } else if (md5($oldPassword) !== $dbPass) {

                echo "<script>alert('Old Password is incorrect')</script>";
            
            } else if (empty($newPassword)) {

                echo "<script>alert('New Password cannot be blank')</script>";

            } else if (empty($newPassword2)) {

                echo "<script>alert('Repeated Password cannot be blank')</script>";

            } else if ($newPassword !== $newPassword2) {

                echo "<script>alert('New Passwords does not match')</script>";

            } else {

                $hashedNewPassword = md5($newPassword);

                $sql = "UPDATE register SET password='$hashedNewPassword' WHERE id='$id'";
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