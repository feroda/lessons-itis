<?php
  include("headerA.php");
  echo "Logout</title>";
  include("headerB.php");
  session_destroy();
  header("Location: index.php");
  exit();
  include("footer.php");

?>
