<?php

$conn = require "../script/conectar.php";

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
  $logged = FALSE;
  
  if ($result != NULL) {
    while ($user = $result->fetch_assoc()) {
      if( ($user['username'] == $username) && 
      ($user['password'] == $password) ) {
        $conn->close();
        header("location: admin.php");
      } 
    }
  }
  if ($logged == FALSE) {
    $conn->close();
    echo "<h1>Datos incorrectos</h1>";
  }
}
