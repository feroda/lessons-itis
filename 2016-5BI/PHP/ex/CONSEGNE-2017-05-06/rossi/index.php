<?php
  require("header1.php");
  echo "HOME";
  require("header2.php");

  if(isset($_SESSION["username"]))
  {
    echo"Benvenuto".$_SESSION["username"];
  } else {
    echo"Non sei loggato, Effettua il login";
  }

  require("footer.php");

  ?>
