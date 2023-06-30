<?php
    if (isset($_POST['submit'])) {

        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['password2']);

        $emailPattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";

        if (empty($username)) {
            
            echo "<script>alert('Username cannot be blank')</script>";
            
        } else if (empty($email)) {

            echo "<script>alert('Email cannot be blank')</script>";

        } else if (!preg_match ($emailPattern, $email)) {
        
            echo "<script>alert('Not a valid email!')</script>";

        } else if (empty($password)) {

            echo "<script>alert('Password cannot be blank')</script>";
        
        } else if (empty($password2)) {

            echo "<script>alert('Second password cannot be blank')</script>";

        } else if ($password !== $password2) {

            echo "<script>alert('Passwords does not match')</script>";

        } else {

            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, email, password) values(?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            
            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $hashedPass = md5($password);
                $stmt->bind_param("sss",$username, $email, $hashedPass);
                if ($stmt->execute()) {
                    
                    echo "<script>alert('New record inserted sucessfully.')</script>";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<script>alert('Someone already registers using this email.')</script>";
            }
            $stmt->close();
            $conn->close();
        }
        
    }
    else {
        echo "<script>alert('Submit button is not set')</script>";
    }
?>