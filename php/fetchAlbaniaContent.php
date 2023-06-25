<?php

  include "connection.php";

  $sql = "SELECT * FROM albaniacontent";
  $result = $conn->query($sql);

  $conn->close();
?>