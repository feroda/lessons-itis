# Esercitazione 2017-05-06

## Considerazioni preliminari

  * la consegna dovrà avvenire su INFOSERVER o su Dropbox o su entrambi
  * nella realizzazione si dovrà minimizzare il codice ripetuto
  * i nomi dei parametri devono essere mantenuti
  * si svolgano prima la FASE1, poi la FASE2, e infine gli extra in ordine
  * è possibile usare il web
  * è possibile che si venga interrogati su quanto realizzato
  * non è possibile copiare dai propri amici o farsi aiutare
  * quello che non si finisce in classe si finisce a casa per giovedi 11 maggio
  * una maggiore cura nella realizzazione ovviamente prevede un migliore voto

## Esercizio  

A partire dalla struttura HTML fornita nel file [pagina.html](pagina.html), creare un sito con:
  * intestazione comune
  * pié di pagina comune
  * titolo variabile su ogni pagina (Ad esempio: "Mi esercito - Login". "Mi esercito" è fornito come parte fissa). Consiglio: pensarci dopo se non si ha subito l'idea:

e che contenga le seguenti pagine:

### Fase 1

  * **index.php**: una pagina di benvenuto. In cui ci sia scritto in grande "Benvenuto" e il nome dell'utente loggato se loggato.
    * (extra1) da abbellire a piacimento
  * **login.php**: form di login che autentica (tramite POST HTTP) con:
    * **username**: nick a piacere, da salvare nella chiave "username" della sessione,
    * **password**: nick a piacere,
    * (extra3) **color_preferred**: scelta esclusiva del colore veramente preferito tra blu, verde, giallo e rosso
  * **logout.php**: operazione di logout e redirezione alla pagina iniziale
  * **header-1.php**: righe iniziali (tip: titolo escluso)
  * **header-2.php**: altra codice comune in alto
  * **footer.php**: righe finali, con il nome dell'utente autenticato

Quando hai finito passa a [README-FASE2.md](README-FASE2.md)
