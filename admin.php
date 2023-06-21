<?php 
  session_start();

	include("php/connection.php");
	include("php/functions.php");

	$user_data = check_login($conn);

  if(isset($_POST['submit'])){
    include "php/userToAdmin.php";
	} 

  if(isset($_POST['submitRemove'])){
    include "php/adminToUser.php";
	}

  if(isset($_POST['submitChangePass'])){
    include "php/changePassword.php";
	}         
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../IW/css/admin.css">
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
              <span class="icon" id="dashboardIcon"><ion-icon name="home-outline"></ion-icon></span>
              <span class="title" id="dashboardText">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon" id="adminIcon"><ion-icon name="person-add-outline"></ion-icon></span>
              <span class="title" id="adminText">Admin</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon" id="passwordIcon"><ion-icon name="lock-closed-outline"></ion-icon></span>
              <span class="title" id="passwordText">Password</span>
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

        <!---------- Cards ---------->
        <div class="cardBox">
          <div class="card">
            <div>
              <div class="numbers">1,504</div>
              <div class="cardName">Daily Views</div>
            </div>
            <div class="iconBx">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">13</div>
              <div class="cardName">Registered Users</div>
            </div>
            <div class="iconBx">
              <ion-icon name="people-outline"></ion-icon>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">5</div>
              <div class="cardName">Messages</div>
            </div>
            <div class="iconBx">
              <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
            </div>
          </div>                              
        </div>

        <!---------- User Details Table ---------->
        <div class="details">
          <div class="recentUsers">
            <div class="cardHeader">
              <h2>Recent Users</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table>
              <thead>
                <tr>
                  <td>Id</td>
                  <td>Username</td>
                  <td>Email</td>
                  <td>Password</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include 'php/fetchUsers.php';  
                  while($row = $result->fetch_assoc()){ 
                ?> 
                        <tr> 
                          <td><?php echo $row['id']; ?></td> 
                          <td><?php echo $row['username']; ?></td> 
                          <td><?php echo $row['email']; ?></td> 
                          <td><?php echo $row['password']; ?></td>

                  <?php
                    if(!$row['status'] == 1){
                  ?>
                          <td><span class="status isNotAdmin">Is not Admin</span></td>
                        </tr> 

                  <?php
                    }else{
                  ?>
                          <td><span class="status isAdmin">Is Admin</span></td>
                        </tr> 

                  <?php 
                    } 
                  ?>                 
                <?php 
                  } 
                ?>                                                                 
              </tbody>
            </table>
          </div>
        </div>

        <!---------- Message Details Table ---------->
        <div class="details">
          <div class="recentUsers">
            <div class="cardHeader">
              <h2>Recent Messages</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table>
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Surname</td>
                  <td>Email</td>
                  <td>Phone</td>
                  <td>Message</td>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include 'php/fetchMessages.php';
                  while($row = $result->fetch_assoc()) 
                  { 
                ?> 
                    <tr> 
                      <td><?php echo $row['firstName']; ?></td>
                      <td><?php echo $row['lastName']; ?></td>  
                      <td><?php echo $row['email']; ?></td> 
                      <td><?php echo $row['phone']; ?></td> 
                      <td><?php echo $row['message']; ?></td> 
                    </tr> 
                <?php 
                  } 
                ?>                                                         
              </tbody>
            </table>
          </div>
        </div>
        
        <!-- User to Admin CSS-->
        <div class="adminDetails">
          <div class="recentAdmins">
            <div class="cardHeader">
              <h2>Administration</h2>
            </div>

            <form action="#" method="POST" id="form" class="form">
              <div class="admin-info">
                <div class="input">
                    <label>Add Admin</label>
                    <input type="text" id="email" name="email" value="Enter user email to make them admin"/>
                </div>                
                <button class="adminBtn" name="submit">Submit</button>  
              </div>  
            </form>

            <form action="#" method="POST" id="form" class="form">
              <div class="admin-info">
                <div class="input">
                    <label>Remove Admin</label>
                    <input type="text" id="email" name="email" value="Enter admin email to make them user"/>
                </div>                
                <button class="adminBtn" name="submitRemove">Submit</button>  
              </div>  
            </form>            

          </div>
        </div>  
        
        <!---------- Change Password ---------->
        <div class="passwordDetails">
          <div class="recentPassword">
            <div class="cardHeader">
              <h2>Password Settings</h2>
            </div>

            <form action="#" method="POST" id="form" class="form">
              <div class="password-info">
                    <div class="input">
                        <label>Old Password</label>
                        <input type="text" id="password" name="oldPassword"/>
                    </div>
                    <div class="input">
                        <label>New Password</label>
                        <input type="text" id="newPassword" name="newPassword"/>
                    </div> 
                    <div class="input">
                        <label>Repeat New Password</label>
                        <input type="text" id="newPassword2" name="newPassword2"/>
                    </div>                                          
                    <button class="adminBtn" name="submitChangePass">Save Changes</button>  
              </div>
            </form>              
          </div>
        </div>        

      </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- jQuery Script (e kemi perdor per me show & hide components ne admin.php)-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

    <!-- Skripta e cila qekon nese perdoruesi deshiron apo jo te beje Sign Out -->
    <script>
      function checkerPassword(){
        var result = confirm('Do you want to edit your password ?');
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

    <script>
      
      $(document).ready(function(){

        $('.adminDetails').hide();                  //Add+Remove Admin bohet hide kur projekti behet fully loaded
        $('.passwordDetails').hide();               //Password Settings bohet hide kur projekti behet fully loaded

        $('#dashboardIcon').on('click', function(){ //i ban show messages & users dhe hide Add+Remove Admin & Password Settings me klikimin e ikones se shtepise ne menu
          $('.details').show();
          $('.adminDetails').hide();
          $('.passwordDetails').hide(); 
        });
        $('#dashboardText').on('click', function(){ //i ban show messages & users dhe hide Add+Remove Admin & Password Settings me klikimin e tekstit  Dashboard ne menu
          $('.details').show();
          $('.adminDetails').hide(); 
          $('.passwordDetails').hide();
        });

        $('#adminIcon').on('click', function(){     //i ban hide messages & users & Password Settings dhe show Add+Remove Admin me klikimin e ikones settings ne menu
          $('.details').hide();
          $('.passwordDetails').hide();
          $('.adminDetails').show();
        });
        $('#adminText').on('click', function(){      //i ban hide messages & users & Password Settings dhe show Add+Remove Admin me klikimin e tekstit Admin ne menu
          $('.details').hide();
          $('.passwordDetails').hide();
          $('.adminDetails').show();
        });    

        $('#passwordIcon').on('click', function(){     //i ban hide messages & users & Add+Remove Admin dhe show Password Settings me klikimin e ikones lock ne menu
          $('.details').hide();
          $('.adminDetails').hide();
          $('.passwordDetails').show();
        });
        $('#passwordText').on('click', function(){      //i ban hide messages & users & Add+Remove Admin dhe show Password Settings me klikimin e tekstit Sign Out ne menu
          $('.details').hide();
          $('.adminDetails').hide();
          $('.passwordDetails').show();
        });          

      });  

    </script>

    <script>
      //i ban hide messages & users dhe show Add Admin me klikimin e ikones apo tekstit Admin ne menu
    </script>

  </body>
</html>