<?php
  require "header-1.php";
  $paagetitle="HOME";
  require "header-2.php";

  if(isset($_SESSION["username"]))
  {
    echo"Benvenuto ".$_SESSION["username"];
  } else {
    echo"Non sei loggato, Effettua il login";
  }

  require("footer.php");

  ?>
