# Correzione

## FASE 1

* header1.php:
    * doveva chiamarsi header-1.php
    * il consiglio era di escludere il titolo ed e' invece stato messo (tag `<title>` )
    * doveva includere `session_start()` alla prima riga per avviare il meccanismo di gestione delle sessioni

* header2.php
    * doveva chiamarsi header-2.php
    * doveva impostare il titolo in modo dinamico grazie ad una variabile che poteva essere messa tra i 2 "require" in index.php (come hai cercato di fare)
    * buono il tentativo di campio menu login/logout se non fosse che hai scritto direttamente l'html dentro l'if. Puoi agire in 2 modi:
        - mettendo `echo '<testohtmlchevuoi>';` e questo è l'approccio che ho usato io;
        - oppure chiudendo le istruzioni php con il tag `?>` dopo ogni `else {` e riaprire il tag `<?php` prima della chiusa graffa;

* footer.php:
    * rimasta una riga di debug (="Billy")
    * per il resto ok

* login.php:
    * assente

* logout.php:
    * ok struttura analoga ad index.php;
    * errori analogi ad index.php;
    * non funziona perche' assente il `session_start()` in header-1.php
    * non redireziona su `index.php` (non mette l'header "Location")

* index.php:
    * la echo tra i 2 "require" è sbagliata. Stampa un testo in mezzo alla `<head>` dell'HTML che sappiamo non viene visualizzata nel corpo della pagina

## FASE 2

*assente*

