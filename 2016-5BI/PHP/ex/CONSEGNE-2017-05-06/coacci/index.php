<?php
  include("headerA.php");
  echo "Home</title>";
  include("headerB.php");

  if(isset($_SESSION["username"]) && $_SESSION["username"]!==""){
    echo "<h2 align='center'>BENVENUTO ".$_SESSION["username"]."</h2>";
  }
  else {
    echo "<p align='center'>NON HAI EFFETUATO IL LOGIN, NON PUOI VISUALIZZARE QUESTA PAGINA!</p>";
  }

  include("footer.php");
?>
