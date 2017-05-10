<?php

//spazio per includere header-1

require "create_me_persistent.php";

// spazio fare tutto il resto
// ...
//QUI CI VA IL TUO CODICE PHP
// ...
// nel ciclo for che visualizza ogni elemento, inserisci le seguenti righe
if (!isset($colors)) {
  $colors = array();
};
do_save_user($name, $surname, $comment, $colors);

//dopo il footer
close_db_conn();
?>
