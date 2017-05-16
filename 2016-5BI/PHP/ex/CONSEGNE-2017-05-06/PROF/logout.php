<?php

require "header-1.php";
// oppure session_start();, ma qui preferiamo restituire al client HTTP un documento html valido in risposta
// anche se poi probabilmente sarà un browser e redirizionerà la richiesta al valore di "Location"
$title = "Logout";
require "header-2.php";

header("Location: index.php");

// mettere obbligatoriamente session_destroy
// EVITARE unset($_SESSION["username"]);
session_destroy();

echo "<h1>Confermata l'uscita dell'utente dal sito</h1>";
echo '<p>Si verrà redirezionati <a href="index.php">alla pagina inziale</a>.<br />';
echo "Se ciò non avviene automaticamente cliccare sul link</p>";

require "footer.php";
?>
