# Correzione

## FASE 1

* headerA.php:
    * doveva chiamarsi header-1.php
    * `session_start()` sarebbe meglio come prima riga;
    * Il `<title>` spezzato a metà è abbastanza immanutenibile.

* headerB.php
    * doveva chiamarsi header-2.php
    * OK -> gestione login

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

*assente*

