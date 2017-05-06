<?php
  session_start();
if(!(isset($_SESSION['login']) && $_SESSION['login'] != '')){
    echo "<h3>Non sei loggato, per accedere </h3>";
    echo '<a href="login.php">CLICCA QUI</a>';
  }
  else{
    echo "<h3>Ciao ".$_SESSION['login']." ora puoi anche uscire</h3>";
    echo '<a href="logout.php">Logout</a>';
  }
?>
