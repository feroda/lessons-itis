<?php
  require("header1.php")
  echo "LOGOUT";
  require("header2.php")

  session_destroy();

  echo"UTENTE DISCONNESSO";

  require("footer.php");

 ?>
