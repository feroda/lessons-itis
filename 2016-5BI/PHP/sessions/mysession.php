<?php
// Start the session
session_start();

if (isset($_GET["username"]) && $_GET["username"] === "pippo") {
  $_SESSION["autenticazionedebole"] = true;
}

//$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$favcolor = "green";
$favcity = "Bologna";
?>
