<?php

// --- NON TOCCARE A MENO DI NON SAPERE CIO' CHE SI FA ---

//Crea una connessione diretta al database tramite socket TCP
$servername = "10.2.29.7";
$username = "prof";
$password = "prof";
$dbname = "db_esercitazione";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// funzione chiamata per ogni record da aggiungere
function do_save_user($name, $surname, $comment, $colors) {

  if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
  } else {
    $username = "anonimo";
  }
  // map colors to string
  $strcolors = "";
  foreach($colors as $c) {
    $strcolors .= $c.",";
  }

  global $conn;  // non usate mai variabili globali nel codice!
  //Effettua una query di inserimento nella tabella persone
  // La tecnica è prepare -> bind -> execute
  // Questa tecnica è più efficiente dell'esecuzione diretta con $conn->query($sql)
  $stmt = $conn->prepare("INSERT INTO persone (name, surname, comment, colors, username) VALUES (?, ?, ?, ?, ?)");

  // La bind_param prende come primo parametro il tipo dei valori da inserire
  // * i - integer
  // * d - double
  // * s - string
  // * b - BLOB
  $stmt->bind_param("sssss", $name, $surname, $comment, $strcolors, $username);

  // esegue la query!
  $stmt->execute();
}

function close_db_conn() {
  global $conn; // evitate di usare variabili globali nel codice!
  $conn->close();
}

?>
