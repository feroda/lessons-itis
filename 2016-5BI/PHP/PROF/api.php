<?php

$p = $_SERVER['PATH_INFO'];
switch ($p) {

  case "/songs/":
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
      require "api/jsonfiltrato.php";
    };
    break;

  default:
    header("HTTP/1.1 404 Not Found");
    echo "<html><head></head><body><h1>The path $p is not found</h1>";
    echo phpinfo();
    echo "</body></html>";
    break;
};

?>
