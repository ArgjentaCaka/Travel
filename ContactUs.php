<?php

  if(isset($_POST['submit'])) {
    include 'php/contactusValidation.php';
  }  

  include "php/fetchContactUsContent.php";
  $row = $result->fetch_assoc();  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../IW/css/contactus.css">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>

    <section class = "contact-section">
      <div class = "contact-bg">
        <h3><?php echo $row['headerTitle1']; ?></h3>
        <h2><?php echo $row['headerTitle2']; ?></h2>
        <div class = "line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class = "text"><?php echo $row['headerText']; ?></p>
      </div>

      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span><?php echo $row['phoneText1']; ?></span>
            <span class = "text"><?php echo $row['phoneText2']; ?></span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span><?php echo $row['emailText1']; ?></span>
            <span class = "text"><?php echo $row['emailText2']; ?></span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span><?php echo $row['addressText1']; ?></span>
            <span class = "text"><?php echo $row['addressText2']; ?></span>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span><?php echo $row['hoursText1']; ?></span>
            <span class = "text"><?php echo $row['hoursText2']; ?></span>
          </div>
        </div>

        <div class = "contact-form">
          <form action="#" method="POST" id="form" class="form"> 
            <div>
              <input type = "text" class = "form-control" placeholder="First Name" name="firstName" id="firstName">
              <input type = "text" class = "form-control" placeholder="Last Name" name="lastName" id="lastName">
            </div>
            <div>
              <input type = "email" class = "form-control" placeholder="E-mail" name="email" id="email">
              <input type = "text" class = "form-control" placeholder="Phone" name="phone" id="phone">
            </div>
            <textarea rows = "5" placeholder="Message" class = "form-control" name="message" id="message"></textarea>
            <input type = "submit" class = "send-btn" value = "send message" name="submit" id="submit">
          </form>

          <div>
            <img src = <?php echo $row['img']; ?> alt = "">
          </div>
        </div>
      </div>

      <div class = "map">
        <iframe src=<?php echo $row['map']; ?> width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class = "contact-footer">
        <h3>Follow Us</h3>
        <div class = "social-links">
          <a href = "#" class = "fab fa-facebook-f"></a>
          <a href = "#" class = "fab fa-twitter"></a>
          <a href = "#" class = "fab fa-instagram"></a>
          <a href = "#" class = "fab fa-linkedin"></a>
          <a href = "#" class = "fab fa-youtube"></a>
        </div>
      </div>
    </section>

    <script src="../IW/js/contactus.js"></script>
  </body>
</html>