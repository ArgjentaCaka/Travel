<?php

  include "connection.php";

  $sql = "SELECT * FROM montenegrocontent";
  $result = $conn->query($sql);

  $conn->close();
?>