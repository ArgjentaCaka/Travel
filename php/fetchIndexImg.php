<?php

  include "connection.php";

  $sql = "SELECT * FROM indeximg";
  $res = $conn->query($sql);

  $conn->close();
?>