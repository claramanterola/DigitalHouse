<?php
  $username = "Pepe";
  $password = "pepito123";
  $password2 = "pepitx123";

  $hash = password_hash($password, PASSWORD_DEFAULT);
  $success = password_verify($password2, $hash);
  var_dump($success);

  // $hash2 = password_hash($password2, PASSWORD_DEFAULT);
  // var_dump($hash);
  // var_dump($hash2);
  exit;
?>
