<?php
  session_start();

  $conn = new mysqli('localhost', 'root', '', 'final');

  if ($conn->connect_error) {
    die($conn->connect_error); exit();
  }else {

    if (isset($_POST['send'])) {

      $username = $_SESSION['user'];
      $chat = $_POST['chat'];

      $q = "INSERT INTO chat(username, chat) VALUES('$username', '$chat') ";

      $result = $conn->query($q);

      header("location: home.php?");

      }else {
        echo "Error";
      }

    }


 ?>
