<?php

require "header-1.php";
$title = "Home";
require "header-2.php";

echo "<h1>Benvenuto ";

if (isset($_SESSION["username"]))
    echo "utente ".$_SESSION["username"];

echo "</h1>";
include("footer.php");
?>

