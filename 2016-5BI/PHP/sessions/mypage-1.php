<?php
  session_start();
  //require "mysession.php";
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
echo "Session variables are set.";
echo "<ul>";
echo "<li>favcolor=".$favcolor."</li>";
echo "<li>favanimal=".$_SESSION["favanimal"]."</li>";
echo "<li>favcity=".$favcity."</li>";
echo "</ul>";

require "footer.php";
?>
