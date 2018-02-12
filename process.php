<?php

  $conn = mysqli_connect("localhost:3307", "root", "nlcfjb");
  mysqli_select_db($conn, "opentutorials");
  $sql = "insert into topic(title, description, author, created) values('".$_POST['title']."','".$_POST['description']."','".$_POST['writer']."',now())";
  $result = mysqli_query($conn, $sql);
  header('location: http://localhost/index.php');
 ?>
