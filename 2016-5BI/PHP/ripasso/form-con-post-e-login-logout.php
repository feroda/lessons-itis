<?php
session_start();
 ?>
<html>
<head>
  <title>PROVA POST</title>
</head>
<body>
  <?php
    if (isset($_SESSION["user_logged_in"])) {
      echo "<h1>Sei ".$_SESSION["user_logged_in"]."</h1>";
    }
    $user='';

    // verifica che il metodo della richiesta HTTP sia POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

      //verifica che sia settata la variabile "u"
      if (isset($_POST["u"])) {
        $user=$_POST["u"];
        echo '<p>Ultimo elemento inviato: '.$user.'</p>';

        if ($_POST["operation"] === "do_login") {
          // Se l'operazione è login => imposta la chiave nella sessione
          $_SESSION["user_logged_in"] = $user;
          echo "Operazione login eseguita";
        }
        elseif ($_POST["operation"] === "do_logout") {
          session_destroy();
        }
      }
    };
  ?>

<form method="POST">
  Utente: <input type="text" name="u" value="<?php echo $user; ?>" />
  <!-- assegno 2 valori diversi al parametro "operation"
  a seconda che venga premuto un bottone oppure un altro -->
  <input type="submit" value="do_login" name="operation" />
  <button type="submit" value="do_logout" name="operation">Logout</button>
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
