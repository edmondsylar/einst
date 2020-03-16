<?php
  include_once 'config.php';
  $cur = new Config();

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    // get the post variables
    $email = $_POST['user'];
    $password = $_POST['password'];

    $cur->login($email, $password);

  }else{
    echo 'Request invalid'.$_SERVER['REQUEST_METHOD'];
  }
 ?>
