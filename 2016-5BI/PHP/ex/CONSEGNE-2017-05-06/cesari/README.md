# Correzione

## FASE 1

* header-1.php:
    * `session_start()` sarebbe meglio come prima riga;
    * Il `<title>` spezzato a metà è abbastanza immanutenibile.

* header-2.php
    * OK
    * buona la definizione del rosso
    * ma perché le due righe `<?php` per la chiusa graffa e l'if?

* footer.php:
    * ok

* login.php:
    * OK -> form di login
    * password = caglio? detto apposta spero ;)

* logout.php:
    * funziona, ma cosa vuol dire quell'exit() prima dell'include del footer?
    * OK perche' il `session_start()` in header-1.php
    * OK redireziona su `index.php`

* index.php:
    * ERRORE -> utilizzare require al posto di include ( su tutti i file
    * NON BUONA -> strategia per mettere il titolo -> meglio utilizzare una variabile di supporto

## FASE 2

* input.php:
    * usare "require" e senza parentesi;
    * Efficaci i tre array(). Forse(!). Di sicuro non elegante, ma direi di piu' "non decente": puoi e devi migliorare su quell'aspetto
        * 1. se conosci gli array associativi, non hai bisogno del contatore `cont` nella sessione
        * 2. se conosci la funzione `array_push` non inserisci gli elementi per indice.
        * 3. scusa ma questo codice ti funziona? Se inserisci un elemento nella posizione n dell'array e non esiste quella posizione nell'array, direi che non te la crea automaticamente.

    * Bene verificare il metodo "POST"
    * Bene l'utilizzo del CSS sulla visualizzazione degli errori
    * Una pecca é che quando l'utente ha inserito correttamente un commento non ha feedback. Potrebbe essere rediretto alla lista dei commenti

* list.php:
    * buono l'utilizzo dell'elemento span
    * brutto lo scorrimento dell'indice impara il foreach (problema similie ad input.php)
    * buono il commento del mio codice. A linea singola e multilinea


