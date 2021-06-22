<?php

require_once('./conexion.php');

if(isset($_POST)) {

  if($_POST['email']) {
    $email = $_POST['email'];
    $query = "INSERT INTO wp_users_newsletter VALUES (NULL, '$email', CURDATE());";
    $insertData = mysqli_query($db, $query);

    if($insertData) {
     echo json_encode('correct');
    }else {
      echo json_encode('incorrect');
    }
  }
}