<?php

// Questo script restituisce un codice HTTP 403 se l'utente non è loggato

require "header-1.php";
$title = "Lista";
require "header-2.php";

if (isset($_SESSION["username"])) {

    if (isset($_SESSION["user_comments"])) {
        // visualizza i commenti se sono stati inseriti
        echo "<ol>";
        foreach ($_SESSION["user_comments"] as $user_c) {
            $cssclass="";
            if ($user_c["name"] == $_SESSION["username"]) {
                $cssclass="sfondo-verde";
            }
            echo '<li><span class="'.$cssclass.'">'.$user_c["name"].';'.$user_c["surname"].';'.$user_c["comment"].'</span></li>';
        }
        echo "</ol>";

    } else {
        //altrimenti visualizza l'informazione
        echo "<h2>Nessun commento inserito ancora in questa sessione utente</h2>";
    }
} else {

    // Restituisco il codice 403
    header("HTTP/1.1 403 Forbidden");
    echo "<h1>Autorizzazione negata</h1>";
    echo '<p>Non sei autorizzato ad accedere a questa pagina, <a href="login.php?next=list.php">effettua prima il Login</a></p>';
}

require "footer.php";
?>
