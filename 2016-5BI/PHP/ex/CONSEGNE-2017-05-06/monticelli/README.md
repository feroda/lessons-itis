# Correzione

## FASE 1

* header-1.php:
    * `session_start()` -> perché non l'hai messo direttamente qui come prima istruzione? Bene che l'hai messo in index.php
    * link variabile se utente loggato o meno: buona iniziativa. Ti manca uno spazio.
    * ERRORE -> escluso titolo intendevo "fino al titolo escluso". L'errore e' che poi lo hai messo nel body html e questo ti verrebbe segnato come un errore abbastanza importante

* header-2.php
    * SBAGLIATO: doveva includere da `<title>` in poi
    * Sarebbe stato meglio fino a `<div class="container">` poi il footer.php lo iniziavi con un `</div>`
    * INOLTRE: se metti il `session_start()` in ogni pagina, non hai bisogno di 2 header php. Puoi mettere `$title.=` prima del require `header-1.php`. Ma non hai minimizzato il codice;

* index.php:
    * v. commento INOLTRE al punto header-2.php
    * NON BENE: gli script vanno nel footer (e anche il `</div>` del container)

* footer.php:
    * appropriato il tag "<footer>"
    * OK -> visualizzazione utente loggato nel footer.php. E anche in grigetto.


* logout.php:
    * OK -> `session_start()`
    * OK -> `session_destroy()`
    * OK -> `header("Location`
    * ERRORE -> exit: se fosse `exit()` sarebbe inutile perche' uscirebbe comunque, ma cosi senza parentesi e' un bug;

* login.php:
    * OK -> require e titolo
    * OK -> redirezione se username definito
    * FANTASTICO -> configurazione di login valido in file separato
    * FANTASTICO -> widget `<input>` e `<button>` Bootstrap per rendere più gradevole il sito
    * NON BENE -> collegato a sopra: hai dovuto ripetere il tag `<script>`


## FASE 2

* input.php:
    * OK -> verifica dei dati su POST HTTP
    * NON BENE -> redirezione su input.php in caso di errore nell'inserimento campo: meglio settare una variabile con il messaggio di errore, poi lasciar correre l'esecuzionee scrivere il messaggio vicino al campo HTML
    * OTTIMO l'utilizzo di un array associativo per il commento fornito

* list.php:
    * OK -> require
    * NON BENE -> perché includi `login_data.php`? pericoloso e non ti serve; non ti serve nemmeno a verificare l'utente attualmente loggato;
    * OK -> tabella HTML!
    * DA MIGLIORARE lo scorrimento dell'array. Utilizzare `foreach ($_SESSION["input"] as $data) {`

## DA FARE (TODO)

* connessione al database
