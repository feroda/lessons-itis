# Correzione

## FASE 1

* headerA.php:
    * doveva chiamarsi header-1.php
    * SOLO bene i contenuto e il `session_start()` anche se dovrebbe andare proprio come prima riga;

* header2.php
    * doveva chiamarsi header-2.php
    * ERRORE -> non include la visualizzazione variabile del `<title>`
    * OK -> gestione campi

* footer.php:
    * rimasta una riga di debug (="Billy")
    * per il resto ok

* login.php:
    * OK -> form di login

* logout.php:
    * funziona, ma cosa vuol dire quell'exit() prima dell'include del footer?
    * errori analogi ad index.php;
    * non funziona perche' assente il `session_start()` in header-1.php
    * non redireziona su `index.php` (non mette l'header "Location")

* index.php:
    * ERRORE -> utilizzare require al posto di include ( sut tutti i file
    * NON BUONA -> strategia per mettere il titolo -> meglio utilizzare una variabile di supporto

## FASE 2

*assente*

