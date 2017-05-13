<html>
<head>
  <title>PROVA POST</title>
</head>
<body>
  <?php
    $user='';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if (isset($_POST["u"])) {
        $user=$_POST["u"];
        echo '<p>Ultimo elemento inviato: '.$user.'</p>';
      }
    };
  ?>

<form method="GET">
  Utente: <input type="text" name="u" value="<?php echo $user; ?>" />
  <input type="submit" value="Invia (modo vecchio)" name="ok" />
  <button type="submit">Invia con button</button>
</form>

<?php
//Disabilitando il commento successivo
//posso includere le informazioni sull'interprete php
//In questo modo posso visualizzare il valore di _GET _POST _SERVER e anche _SESSION
//Posso usare la direttiva "include" perché
//se il file info.php non esiste non ho bisogno che l'esecuzione
//di questo script vada in errore
//include "info.php";
?>
</body>
</html>
