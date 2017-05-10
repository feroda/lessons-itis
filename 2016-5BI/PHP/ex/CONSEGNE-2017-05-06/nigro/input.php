<?php
require'header1.php';
$title="input";
require'header2.php';

if(!isset($_POST["username"])||!isset($_POST["password"])||!isset($_POST["commento"]))
{
  $_SESSION["errore_input"]="mancano i parametri";

}




?>


<?php
    if(!isset($_SESSION["errore_input"]));
    {
      echo $_SESSION["errore_input"];

    }
?>
<form name="login" action="input.php" method="post">
   Utente 	<input name="username" type="text" value="">
<br>
<p>Password<input name="password" type="password" value="" size="20"> </p>
<p>commento<textarea name="commento" cols="30" rows="10"></textarea></p>
<button type="submit">Conferma</button>
</form>
