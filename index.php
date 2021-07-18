<?php
  session_start();

  $_SESSION['message'] = '';


  $conn = new mysqli('localhost', 'root', '', 'final');

  if ($conn->connect_error) {
    die($conn->connect_error); exit();
  }else {

    if (isset($_POST['login'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];

      $q = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

      $result = $conn->query($q);

      if ($result->num_rows > 0) {
        $_SESSION['user'] = $username;
        while ($row = $result->fetch_assoc()) {
          $_SESSION['pic'] = $row['photo'];
        }
        header("location: home.php");
      }else {
        $_SESSION['message'] = "Wrong Username or Password";
      }

    }

  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csc chat platform</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <h1 class="text-primary text-center" >Welcome to Computer Science Class 0f 2020 Chat Platform</h1>
    <hr>
    <div class="container" style="width:90%; margin-top:3%;" >
          <h3 class="text-primary text-center" >Login</h3>
          <form class="" action="index.php" method="post" role="form">
              <?php if ($_SESSION['message'] !== '') {
                echo "<div class='alert alert-danger'>".$_SESSION['message'].'</div>';
              } ?>
            <div class="form-group">
              <label for="">Username</label>
              <input class="form-control" type="text" name="username" value="">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input class="form-control" type="password" name="password" value="">
            </div>
            <div class="form-group">
            <button type="submit" class=" form-control btn btn-primary" name="login">Login</button>
            </div>
          </form>
          <h5 class="text-primary" >create account</h3>
          <a class="btn btn-outline-primary" href="register.php">Register</a>
    </div>
  </body>
</html>
