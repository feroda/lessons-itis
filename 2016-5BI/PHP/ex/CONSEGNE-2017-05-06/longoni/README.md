# Correzione

Longoni, mi dispiace ma hai fatto proprio un casino.
Di sicuro non hai assimilato alcuni meccanismi di base per inquadrare bene cosa fa il PHP.

## FASE 1

* header1.php:
    * doveva chiamarsi header-1.php
    * OK -> `session_start();`
    * ERRORE -> fa la stampa di una stringa prima pero' del documento html stesso rendendo il corpo della risposta HTTP incompatibile con il formato HTML (considerato che tutto quello che scrivi qui va nel corpo)
    * QUINDI -> oltre al `session_start()` non include alcuna parte di pagina

* header2.php
    * doveva chiamarsi header-2.php
    * ERRORE -> include il tag `<html>` -> inizio formato, quindi tutto ciò che c'e' prima è come se non esista
    * ERRORE -> include tutta la pagina incluso tutto il `<body>` fino alla chiusura `</html>`.
    * QUINDI -> Essendo una intestazione che senso ha?

* footer.php:
    * OK -> inclusione username se l'utente e' loggato

* login.php:
    * NON BELLO -> se utente già loggato lo scrive in rosso
    * OK -> verifica metodo POST
    * OK -> verifica username e password e redirezione
    * Questo sempre considerando che non si vedra' nulla poiche' header2.php contiene `</html>`
    * OK -> form HTML con campi
    * IDENTICO -> a quello di Coacci....non e' che e' il template di Bracaccini o alrti file? dove presi?

* logout.php:
    * funzionante;
    * NON OCCORREVA includere i file esterni, solo il `session_start()` in cima (che tu hai in `header-1.php`). Solo quello bastava.

* index.php:
    * funzionante al di là dell'errore di digitazione e dei file esterni
    * NON BENE -> utilizzo di inlude invece di require

## FASE 2

*assente*

