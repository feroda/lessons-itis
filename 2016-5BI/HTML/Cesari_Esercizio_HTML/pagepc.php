
<?php
  $nome=$_POST["n"];
  $commento=$_POST["comment"];
  echo nl2br("Ciao ".$nome."\n");
  echo nl2br("Il tuo commento è stato ricevuto:\n");
  echo $commento;
?>
