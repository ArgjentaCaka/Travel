<?php

  include "connection.php";

  $sql = "SELECT * FROM indexcontent";
  $result = $conn->query($sql);

  $conn->close();
?>