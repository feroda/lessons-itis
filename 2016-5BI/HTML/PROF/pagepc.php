
<?php

  $nome=$_POST["ilnome"];
  $commento=$_POST["ilcommento"];
  echo "<p>";
  echo nl2br("Ciao ".$nome."\n");
  echo nl2br("Il tuo commento è stato ricevuto:\n");
  echo $commento;
  echo "</p>";

    echo "<pre>";
    echo "Variabili passate in POST (nel body http):\n";
    print_r($_POST);
    echo "Variabili passate in GET (nella querystring dell'URL):\n";
    print_r($_GET);
    echo "</pre>";

  phpinfo();
?>
