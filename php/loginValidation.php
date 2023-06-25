<?php

    if(isset($_POST['submit']))
	{
		//something was posted
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$hashedPassword = md5($password);
		
		$emailPattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
		
		if (empty($email)) {

            echo "<script>alert('Email cannot be blank')</script>";

        } else if (!preg_match ($emailPattern, $email)) {
            
            echo "<script>alert('Not a valid email!')</script>";

        } else if (empty($password)) {

            echo "<script>alert('Password cannot be blank')</script>";
            
        } else {

			//read from database
			$query = "select * from register where email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $hashedPassword)
					{
						if($user_data['status'] == 1){

							$_SESSION['id'] = $user_data['id'];
							header("Location: admin.php");
							die;

						} else {
                            
							$_SESSION['id'] = $user_data['id'];
							header("Location: user.php");
							die;
							
                        }
					} else {
						echo "<script>alert('Icorrect password!')</script>";
					}

				} else {
					echo "<script>alert('Icorrect email or password!')</script>";
				}
			} 
			
		}
		
	} else {
        echo "<script>alert('Submit button is not set')</script>";
    }

?>