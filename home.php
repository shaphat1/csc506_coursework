<?php
  session_start();

  $conn = new mysqli('localhost', 'root', '', 'final');

  if ($conn->connect_error) {
    die($conn->connect_error); exit();
  }else {

    $q = "SELECT * FROM login RIGHT JOIN chat ON login.username = chat.username ORDER BY chat.id";

    $result = $conn->query($q);

    $user = $_SESSION['user'];


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
      <h3 style="color: white;" class="text-center"> <?php echo $user; ?> Welcome to Chat Platform</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="chat-container col-sm-8 mx-auto" style="width:100%; margin: 2px auto; background:#e9ecef;padding:15px; border-radius: 10px;">

          <?php
          while ($row = $result->fetch_assoc()) {
            echo '<div class = "chat" style="width:100%; padding: 20px; margin:2px auto; background:#f1f1f1; border: 0.5px solid #007bff; border-radius: 20px;" >
                    <img src = "'.$row["photo"].'" width = 80 height = 80 style = "border-radius:100px;" />
                    <h5 style = "display:inline;">'.$row["username"].'</h5>
                    <hr>
                    <p>'.
                    $row["chat"].'</p>
                    </div>';
          }

           ?>
           <span id="focus"></span>

        </div>
        <span id="focus"></span>
        <div style="margin:0.5px auto;" id="formDiv" class="col-sm-6">
          <form class="" action="message.php" method="post">
              <div class="form-group">
                <textarea style="" class="form-control" name="chat" rows="2" cols="80" placeholder="Type Here"></textarea> <br>
                <button class="btn btn-primary btn-block" type="submit" name="send">Send</button>
              </div>
          </form>
        </div>
      </div>

      </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){

  setInterval(ajaxCall, 1000);
  function ajaxCall() {
    $('.chat-container').load('chatajax.php');
  }

  var x = document.getElementById('focus');
  x.scrollIntoView();

});
</script>
