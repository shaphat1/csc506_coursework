<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'final');

if ($conn->connect_error) {
  die($conn->connect_error); exit();
}else {

  $q = "SELECT * FROM login RIGHT JOIN chat ON login.username = chat.username ORDER BY chat.id";

  $result = $conn->query($q);
  while ($row = $result->fetch_assoc()) {
    echo '<div class = "chat" style="width:100%; padding: 20px; margin:2px auto; background:#f1f1f1; border: 0.5px solid #007bff; border-radius: 20px;" >
            <img src = "'.$row["photo"].'" width = 80 height = 80 style = "border-radius:100px;" />
            <h5 style = "display:inline; margin-left:10px;">'.$row["username"].'</h5> <hr> <p>'.
            $row["chat"].'</p>
            </div>';
        }
      }
