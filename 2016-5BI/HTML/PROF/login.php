<?php

require "header.php";

// autenticazione senza database
$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$uname = $_POST['username'];
	$pword = $_POST['password'];

	if (($uname == "prof") && ($pword == "prof")) {

			// LOGIN CON SUCCESSO!
			$_SESSION['login'] = $uname;
			header ("Location: index.php");
	}
	else {
			$errorMessage = "Login FAILED";
			$_SESSION['login'] = '';
	}
}
?>

<p class="lead">Inserisci i dati segreti prof:prof per entrare</p>

<form name="form1" method="POST" action="">

	Username: <input type='text' name='username'  value="<?php print $uname;?>" maxlength="20">
	Password: <input type='text' name='password'  value="<?php print $pword;?>" maxlength="16">

	<p align="center"> <input type="Submit" name="Submit1" value="Login"> </p>

</form>

<p>
<?php

print $errorMessage;
require "footer.php";

?>
