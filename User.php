<?php 
  session_start();

	include "php/connection.php";
	
  include "php/functions.php";
	$user_data = check_login($conn);

  if(isset($_POST['submit'])){
    include "php/accountSettingsValidation.php";
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link rel="stylesheet" href="../IW/css/user.css">
  </head>
  <body>
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="icon"><ion-icon name="planet-outline"></ion-icon></span>
              <span class="title">Traveling</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
              <span class="title">Settings</span>
            </a>
          </li>
          <li>
            <a href="logout.php" onclick="checker()">
              <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
              <span class="title">Sign Out</span>
            </a>
          </li>                                                 
        </ul>
      </div>

      <!---------- main ---------->
      <div class="main">

        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <!---------- search ---------->
          <div class="search">
            <label>
              <input type="text" placeholder="Search here">
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <!---------- userImage ---------->
          <div class="user">
            <img src="../IW/img/user.jpg">
          </div>
        </div>

        <!---------- User Details Table ---------->
        <div class="details">
          <div class="recentUsers">
            <div class="cardHeader">
              <h2>Acount Settings</h2>
            </div>

            <form action="#" method="POST" id="form" class="form">
              <div class="profile-info">
                    <div class="input">
                        <label for="id">ID:</label>
                        <input disabled type="text" id="id" name="id" value="<?php echo $user_data['id'];  ?>"/>
                    </div>
                    <div class="input">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="<?php echo $user_data['username'];  ?>"/>
                    </div>
                    <div class="input">
                        <label for="email">Email:</label>
                        <input disabled type="text" id="email" name="email" value="<?php echo $user_data['email'];  ?>"/>
                    </div>   
                    <div class="input">
                        <label for="isAdmin">Status:</label>
                        <input disabled type="text" id="isAdmin" name="isAdmin" value="Not Admin"/>
                    </div>                      
                    <button class="btn" name="submit" onclick="checkerUsername()">Save Changes</button>  
              </div>
            </form>              
          </div>
        </div>
      </div>

      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="#"></script> -->

    <!-- Skripta e cila qekon nese perdoruesi deshiron apo jo te beje Sign Out -->
    <script>
      function checker(){
        var result = confirm('Do you want to Sign Out ?');
        if(result == false){
          event.preventDefault();
        }
      }
    </script>

    <!-- Skripta e cila qekon nese perdoruesi deshiron apo jo te ndryshoje te dhenat personale -->
    <script>
      function checkerUsername(){
        var result = confirm('Do you want to edit your username ?');
        if(result == false){
          event.preventDefault();
        }
      }
    </script>

    <script>
      // Menu Toggle - Ngushtimi i  menyse
      let toggle = document.querySelector('.toggle');
      let navigation = document.querySelector('.navigation');
      let main = document.querySelector('.main');

      toggle.onclick = function(){
        navigation.classList.toggle('active');
        main.classList.toggle('active');
      }

      // E mban menyne e navigation te selektuar perderisa miu levize ne pjese tjera te faqes
      let list = document.querySelectorAll('.navigation li');
      function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
      }
      list.forEach((item) => item.addEventListener('mouseover', activeLink));
    </script>

  </body>
</html>