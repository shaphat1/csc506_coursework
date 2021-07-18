<?php
  session_start();

  $conn = new mysqli('localhost', 'root', '', 'final');

  if ($conn->connect_error) {
    die($conn->connect_error); exit();
  }else {

    $q = "SELECT * FROM chat";

    $result = $conn->query($q);


  }

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div style="min-height: 50px; background:#007bff;" class="sticky-top">
      <h3 style="color: white;" class="text-center"> <?php echo $_SESSION['user']; ?> Welcome to Chat Platform</h3>
    </div>
    <div class="container-fluid">


      <div class="row">
        <div class="col-sm-8">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="col-sm-4">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>


      <div class="chat-container" style="width:60%; margin: 2px auto; background:#e9ecef;padding:15px; border-radius: 10px;">

        <?php
          while ($row = $result->fetch_assoc()) {
          echo '<div style="width:100%; padding: 20px; margin:2px auto; background:#f1f1f1; border: 3px solid #007bff; border-radius: 20px;" >
                  <h3>'.$row["username"].'</h3> <hr> <p>'.
                  $row["chat"].'</p>
                  </div>'
                ;}?>
      </div>
      </div>

      <div class="" style="width:49%; margin: 2px auto;" >
        <form class="" action="message.php" method="post">
          <div class="form-group">
            <textarea class="form-control" name="chat" rows="4" cols="80" placeholder=""Type Here></textarea> <br>
            <button class="btn btn-primary btn-block" type="submit" name="send">Send</button>
          </div>
      </div>
      </form>
    </div>
  </body>
</html>
