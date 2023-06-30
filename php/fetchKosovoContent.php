<?php

  include "connection.php";

  $sql = "SELECT * FROM kosovocontent";
  $result = $conn->query($sql);

  $conn->close();
?>