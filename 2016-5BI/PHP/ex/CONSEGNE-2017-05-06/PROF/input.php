<?php

// Questo script restituisce un codice HTTP 403 se l'utente non è loggato

require "header-1.php";
$title = "Commenta";
require "header-2.php";

//una possibilità per gestire gli errori è di gestirle con un array associativo
$ERRORS=array();
$name="";
$surname="";
$comment="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["name"])&&isset($_POST["surname"])&&isset($_POST["comment"])) {

        $name=$_POST["name"];
        $surname=$_POST["surname"];
        $comment=$_POST["comment"];

        if (strlen($name) < 3) {
            $ERRORS["name"] = "Il nome deve essere lungo almeno 3 caratteri";
        } else if (empty($surname)) {
            $ERRORS["surname"] = "Il cognome deve essere specificato";
        } else if (empty($comment)) {
            $ERRORS["comment"] = "Il comment deve essere specificato";
        };

        if (empty($ERRORS)) {
            //se non ci sono errori
            if (!isset($_SESSION["user_comments"])) {
                // se non è stato creato l'array per memorizzare i commenti nella sessione
                // crealo
                $_SESSION["user_comments"] = array();
            };

            array_push($_SESSION["user_comments"], array("name" => $name, "surname" => $surname, "comment" => $comment));
            echo "<h2>Nuovo commento inserito</h2>";
            echo "<p>Modificare i campi e inserire un nuovo commento se lo si desidera</p>";
        };

    };
};

//Visualizzo la form HTML
if (isset($_SESSION["username"])) {

    echo '<form method="POST">';
    echo '<div class="mio-input">Nome<br /><input type="text" value="'.$name.'" name="name" required /></div>';
    echo '<div class="mio-input">Cognome<br /><input type="text" value="'.$surname.'" name="surname" required /></div>';
    echo '<div class="mio-input">Commento<br /> <textarea name="comment" required>'.$comment.'</textarea></div>';
    /* required è un attributo HTML5 che evita che la POST sia fatta se il campo è vuoto
       lo metto qui per vostra conoscenza. Non mi evita di fare i controlli lato server in PHP
       quegli "if (empty" sopra: cosa succederebbe infatti se la richiesta POST HTTP viene fatta via telnet?
    */
    echo '<div class="mio-input"><button type="submit">Invia</button></div>';
    echo '</form>';
} else {

    //Restituisco un codice 403 se l'utente non è loggato
    header("HTTP/1.1 403 Forbidden");
    echo "<h1>Autorizzazione negata</h1>";
    echo '<p>Non sei autorizzato ad accedere a questa pagina, <a href="login.php?next=input.php">effettua prima il Login</a></p>';

}

require "footer.php";
?>
