<?php
  include("header1.php");
  include("header2.php");

  if(isset($_SESSION["usurname"]) && $_SESSION["username"]!=="")
  {
    echo "<h1 align=' center'>Benvenuto nella tua pagina: ".$_SESSION["usurname"]."</h1>";
  }

  include("footer.php");
?>
