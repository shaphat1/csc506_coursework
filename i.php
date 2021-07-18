<?php
  session_start();

  $_SESSION['message'] = '';


  $conn = new mysqli('localhost', 'root', '', 'final');

  if ($conn->connect_error) {
    die($conn->connect_error); exit();
  }else {

      $q = "SELECT * FROM login RIGHT JOIN chat ON login.username = chat.username ORDER BY chat.id";

      $result = $conn->query($q);

      if ($result->num_rows > 0) {
        echo "<pre>Username    File     Message</pre>";
        while ($row = $result->fetch_assoc()) {
          echo "<b>".$row['username']."</b>".$row['photo']."\t".$row['chat']."\n";
        }
      }else {
        echo "No record";
      }



  }

 ?>
