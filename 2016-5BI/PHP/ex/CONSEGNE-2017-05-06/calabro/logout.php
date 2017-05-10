<?php
  include("header-1.php");
  echo "Logout</title>";
  include("header-2.php");
  session_destroy();
  //echo "<h4>UTENTE DISCONNESSO</h4>";
  header("Location: index.php");
  exit();
  include("footer.php");

?>
