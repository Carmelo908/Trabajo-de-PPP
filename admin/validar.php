<?php

$conn = require "../script/conectar.php"

function test_input($data) {    
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
  
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  $result = $conn->query("SELECT * FROM admins");
  $users = $result->fetchAll();
  
  foreach($users as $user) {
    
    if(($user['username'] == $username) && 
    ($user['password'] == $password)) {
      header("location: admin.php");
    }
    else {
      echo "<script language='javascript'>";
      echo "alert('WRONG INFORMATION')";
      echo "</script>";
      die();
    }
  }
}
