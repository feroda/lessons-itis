# Correzione

## FASE 1

* header1.php:
    * doveva chiamarsi header-1.php
    * `session_start()` -> OK
    * escluso titolo -> OK

* header2.php
    * doveva chiamarsi header-2.php
    * titolo dinamico -> OK
    * visualizzazione Login/Logout -> OK. Tip: usa le virgolette per gli attributi HTML e l'apice per la stringa PHP. HTML ha come standard le ";
    * DOMANDA: come mai include gli script e una parte del contenuto testuale?
    * NOTE:
        * srebbe stato meglio chiudere questo file con `<div class="container">` e avrei iniziato il footer.php con un `</div>`
        * i tag <script> vanno tutti a fondo pagina

* index.php:
    * un brutto abbellimento sono i 2 bottoni
    * è preferibile usare `require` senza parentesi

* footer.php:
    * appropriato il tag "<footer>"
    * bene a livello di esercizio che hai messo link login e logout

* logout.php:
    * manca uno spazio nella stringa "Location:index.php" dopo i ":"
    * OK -> `session_start()`
    * OK -> `session_destroy()`
    * OK -> `header("Location`
    * ? -> alternativa al `session_destroy()`, buono averla messa, ma credo sia pericolosa. Cosa succede se ci sono altre chiavi settate nella `$_SESSION` e si logga un altro utente?
    * INUTILE -> exit(): uscirebbe comunque

* login.php:
    * OK -> require e titolo
    * OK -> redirezione se username definito
    * NON BENE -> gestione dell'errore nella sessione... perché?
    * NON BENE -> POST del login su altro script `check.php`

* check.php:
    * ERRORE -> non hai controllato `isset($_POST["username"])` e nemmeno se è una richiesta POST;
    * NON BENE -> redirect su login.php con settaggio chiave "errore" nella sessione. Comunque bel tentativo, funzionante.
    * OK -> settare username e pass nella sessione a quelli passati in POST
    * INUTILE -> exit(): uscirebbe comunque

## FASE 2

* input.php:
    * OK -> verifica dei dati su POST HTTP
    * ERRORE -> settare la chiave `errore_input` nella sessione e poi non viene utilizzata
    * ERRORE -> `require(list.php)`: con parentesi e senza virgolette
    * OK -> gestione degli errori (spartana, ma ok)
    * OK -> campi input text e textarea
    * NOTA -> l'attributo `action` della `<form>` meglio lasciarlo vuoto se si parla dello stesso script

* stampaDB.php:
    * OK -> aggiunta facoltativa all'esercizio!
    * OK -> inserimento header(s) e footer della pagina
    * OK -> variazione parametri di connessione al db
    * ERRORE -> "commeti" al posto di "commenti" ;). bravo!

* list.php:
    * non fatta... come mai?
