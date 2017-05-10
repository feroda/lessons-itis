<?php

session_start();

session_destroy();

//alternativa

unset($_SESSION["username"]);
unset($_SESSION["password"]);

  header('Location:index.php');
  exit();




?>
