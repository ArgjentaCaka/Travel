<?php

  include "connection.php";

  $sql = "SELECT * FROM macedoniacontent";
  $result = $conn->query($sql);

  $conn->close();
?>