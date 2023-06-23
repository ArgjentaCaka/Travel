<?php

    include "php/connection.php";

	if(isset($_POST['submit'])){
		include 'php/registerValidation.php';
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../IW/css/register.css"> 
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Never Miss a Post !</h2>
        </div>

        <form action="#" method="POST" id="form" class="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="Username" id="username" name="username" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="email@example.com" id="email" name="email" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Password" id="password" name="password" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password check</label>
                <input type="password" placeholder="Repeat Password" id="password2" name="password2" />
                <small>Error message</small>
            </div>
            <button value="Submit" name="submit">Submit</button>
            <br>
            <span>Already have an account? - <a href="../IW/login.php">Log In</a></span>           
        </form>
    </div>

    <script src="../IW/js/register.js"></script>
</body>
</html>