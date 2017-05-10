<?php
  include("header-1.php");
  echo "Home</title>";
  include("header-2.php");
  if(isset($_SESSION["username"]) && $_SESSION["username"]!==""){
    echo "<h2 align='center'>Benvenuto ".$_SESSION["username"]."</h2>";
  }
  else {
    echo "<p align='center'>Non sei loggato, per visualizzare questa pagina effettua il login!</p>";
  }

  include("footer.php");
?>
