# Correzione

## FASE 1

* headerA.php:
    * doveva chiamarsi header-1.php
    * `session_start()` sarebbe meglio come prima riga;
    * Il `<title>` spezzato a metà è abbastanza immanutenibile.

* headerB.php
    * doveva chiamarsi header-2.php
    * OK -> gestione login
    * buona la definizione della classe css "rosso", peccato che poi colori le scritte in blue. Confido sia fatto volutamente per prova.

* footer.php:
    * ok

* login.php:
    * OK -> form di login

* logout.php:
    * funziona, ma cosa vuol dire quell'exit() prima dell'include del footer?

* index.php:
    * ERRORE -> utilizzare require al posto di include ( su tutti i file
    * NON BUONA -> strategia per mettere il titolo -> meglio utilizzare una variabile di supporto

## FASE 2

* input.php:
    * ERRORE -> utilizzare `require` al posto di `include`
    * OK FORM e verifica errori
    * ERRORE -> non inserito il commento nella sessione (`$_SESSION`) per condividerlo con altre pagine
    * imprecisione sul messaggio di errore
    * buono l'utilizzo della classe css "rosso"

* list.php:
    * assente
