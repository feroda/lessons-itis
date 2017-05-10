<?php
session_start();
if (isset($_SESSION["username"]))
{
	header('Location:index.php');
	exit();

}

if($_POST["username"]=="" || $_POST["password"]=="")
{
  $_SESSION["errore"]="devi inserire utente e password";
  header('Location:login.php');
	exit();

}

$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
header('Location:index.php');
exit();




 ?>
