<?php
require "header.php";

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login.php");
	echo '<p class="lead">Sezione segreta, devi andare al <a href="login.php">Login</a></p>';
	require "footer.php";
}

?>
	<p class="lead">Complimenti sei entrato nella sezione segretissima</p>
	<p>Ora puoi uscire <a href="logout.php">Log out</a></p>

<?php
 	require "footer.php";
?>
