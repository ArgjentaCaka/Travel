<?php

  include "connection.php";

  $sql = "SELECT * FROM contactuscontent";
  $result = $conn->query($sql);

  $conn->close();
?>