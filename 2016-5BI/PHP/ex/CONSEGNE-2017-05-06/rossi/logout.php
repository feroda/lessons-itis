<?php
  require "header1.php";
  $pagetitle="LOGOUT";
  require "header2.php"

  session_destroy();

  echo"UTENTE DISCONNESSO";

  require("footer.php");

 ?>
