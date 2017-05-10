<?php

require("header1.php");
$title="login";
require 'header2.php';
if (isset($_SESSION["username"]))
{
	header('Location:index.php');
	exit();

}

if(isset($_SESSION["errore"])){
	echo $_SESSION["errore"];
	unset($_SESSION["errore"]);
	echo "<br>";
}
 ?>

 <form name="login" action="check.php" method="post">
 		Utente 	<input name="username" type="text" value="">
 <br>
 <p>Password<input name="password" type="password" value="" size="20"> </p>
 <button type="submit">Conferma</button>
 </form>



 <?php
		include("footer.php");



 ?>
