<?php

/* aggiungo a questa pagina la possibilità di essere indirizzata
 * con il parametro "next" nella querystring.
 * In questo modo, dopo l'elaborazione della richiesta HTTP POST,
 * il php sa dove redirigere l'utente.
 * - Quando il parametro "next" è nella querystring -> è in $_GET
 * - Viene inserito nella form come campo "hidden" di nome "redirect_next"
 * - Viene valutato nella POST HTTP e settato come valore nell'header Location
 * - Di default l'utente viene rediretto ad index.php
 */

require "header-1.php";
$title = "Login";
require "header-2.php";

$user="";

if (isset($_SESSION["username"])) {
    echo "Utente autenticato: ".$_SESSION["username"]."<br />";
    echo "Se vuoi puoi cambiare utente, ricompilando la form";
    $user = $_SESSION["username"];
};

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"])&&(isset($_POST["password"]))&&($_POST["username"] !== "")) {

        // imposto il nome utente nella sessione
        // non occorre verificare la password
        $_SESSION["username"] = $_POST["username"];

        if (empty($_POST["redirect_next"]))
            $redirect_to="index.php";
        else
            $redirect_to=$_POST["redirect_next"];

        header("Location: ".$redirect_to);
    }

};

?>

<form method="POST">
    <div class="mio-input">Username:<br /><input type="text" name="username" value="<?php echo $user ?>" /></div>
    <div class="mio-input">Password:<br /><input type="password" name="password" /></div>
    <input type="hidden" name="redirect_next" value="<?php if (isset($_GET["next"])) echo $_GET["next"]; ?>"/>
    <div class="mio-input"><button type="submit">Invia</button></div>
</form>

<?php

require "footer.php";
?>
