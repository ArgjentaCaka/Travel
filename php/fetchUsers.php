<?php

  include "connection.php";

  $sql = "SELECT * FROM register";
  $result = $conn->query($sql);

  $conn->close();
?>