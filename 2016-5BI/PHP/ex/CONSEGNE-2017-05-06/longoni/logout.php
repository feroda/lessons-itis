<?php
include("header1.php");
include("header2.php");

echo "Questa è la pagina di logout";

session_destroy();
header("Location: index.php");
exit();

include("footer.php");
?>
