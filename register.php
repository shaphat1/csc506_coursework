<?php
  session_start();

  $_SESSION['message'] = '';


  $conn = new mysqli('localhost', 'root', '', 'final');

  if ($conn->connect_error) {
    die($conn->connect_error); exit();
  }else {

    if (isset($_POST['register'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];

      $q = "SELECT * FROM login WHERE username = '$username'";

      $result = $conn->query($q);

      if ($result->num_rows == 0) {

        if (isset($_FILES['file'])) {
          $file_name = $_FILES['file']['name'];
          $file_size = $_FILES['file']['size'];
          $file_tmp = $_FILES['file']['tmp_name'];
          $file_type = $_FILES['file']['type'];

          if (!preg_match("!image!", $file_type)) {
            $_SESSION['message'] = "Only upload jpeg, jpg or png";
          }

          if ($file_size > 2097152) {
            $_SESSION['message'] = "File size cannot be more than 2MB";
          }
          if ($_SESSION['message'] == "") {
            $file_name = "photos/$username.jpg";
            move_uploaded_file($file_tmp, $file_name);

            $sq = "INSERT INTO login(username, password, photo) VALUES('$username', '$password', '$file_name')";
            $save = $conn->query($sq);
            if ($save) {
              $_SESSION['user'] = $username;
              header("location: home.php");
            }else {
                $_SESSION['message'] = "Error";
            }

          }
        }

      }else {
        $_SESSION['message'] = "User Already Exist";
      }

    }

  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>computer science class of 2020 Chat Platform</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <h3 class="text-primary text-center" >Welcome Computer Science Class of 2020  to Chat-Platform</h3>
    <hr>
    <div class="container" style="width:90%; margin-top:3%;" >
          <h3 class="text-primary text-center" >Register</h3>
          <form class="" action="register.php" method="post" role="form" enctype="multipart/form-data">
              <?php if ($_SESSION['message'] !== '') {
                echo "<div class='alert alert-danger text-center'>".$_SESSION['message'].'</div>';
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
              <input type="file" name="file" value="">
            </div>
            <div class="form-group">
            <button type="submit" class=" form-control btn btn-primary" name="register">Register</button>
            </div>
          </form>
          <h5 class="text-primary" >Already Have an Account?</h3>
          <a class="btn btn-outline-primary" href="index.php">Login</a>
    </div>
  </body>
</html>
