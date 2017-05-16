# Contenuto della directory

* **PROF**: directory cui si fa riferimento nel resto di questa pagina. C'è un sito con FORM e AUTENTICAZIONE. Prima realizzazione
* **ripasso**: directory che contiene il ripasso fatto in classe sabato 13 maggio;
* **ex**: esercitazione del 6 maggio, contiene directory
  * [CONSEGNE-2017-05-06/](ex/CONSEGNE-2017-05-06/): con le consegne degli alunni e le correzioni nei singoli files README.md
  * [CONSEGNE-2017-05-06/PROF](ex/CONSEGNE-2017-05-06/PROF) con risoluzione dell'esercitazione e piccoli miglioramenti:
    * risposta HTTP 403 in caso di accesso non autorizzato
    * tecnica di redirezionamento ad una pagina specifica dopo il login tramite parametro nella querystring
* **sessions**: esperimenti su sessioni

### Altro

* **ex2**: esercitazione su interazione con database, non fatto in classe
* **API-Monticelli**: consegna di Monticello di TPSIT, json con filtraggio canzoni
* **CESARI**: revisione esercizio Cesari su login/logout


# STUDIARE: La mia prima pagina PHP con FORM e AUTENTICAZIONE.

Questa versione del sito è l'evoluzione di quella presente nella directory HTML
e include le seguenti funzionalità:

* header.php e footer.php:
  * separazione intestazione e pié di pagina dalle pagine originali HTML
  * inclusione da tutte le pagine tramite direttiva "require" di php
  * si fa riferimento ad un foglio di stile in file esterno (css/style.css)
    che include le definizioni css per questo sito specifico
* contact.php: gestione della form di contatto:
  * valutazione dei dati in POST solo se `$_POST` non è vuota
  * visualizzazione degli errori nel caso la form non sia compilata bene
* login con l'utilizzo di sessione (`$_SESSION`) per l'autenticazione
* login.php:
  * valutazione dei dati in POST solo se la richiesta è una POST HTTP ($_SERVER["HTTP_REQUEST_METHOD"])
  * verifica credenziali memorizzate nel codicea (prof:prof)
  * impostazione della chiave 'login' in `$_SESSION`
* logout.php: elimina la sessione (`destroy_session()`)

Gli argomenti trattati sono quindi:

* separazione di files php
* gestione delle form in php e degli errori
* gestione del login con le sessioni lato web server

Per quello che riguarda la parte client abbiamo invece:

* separazione foglio di stile css
* realizzazione form con stile bootstrap

## Riferimenti per lo studio

#### LINGUA INGLESE o ITALIANA

È fortemente consigliato di studiare il materiale in inglese.
Se è necessaria la traduzione in italiano usare il traduttore integrato nel proprio browser,
oppure inserire nel browser l'URL

`https://translate.google.com/translate?sl=en&tl=it&js=y&u=<URL DA TRADURRE>`

### Direttiva require

include e require sono 2 direttive simili in php per includere files esterni:

* W3Schools PHP include: https://www.w3schools.com/php/php_includes.asp

### Gestione forms in PHP

* W3Schools PHP Forms Handling https://www.w3schools.com/php/php_forms.asp
* W3Schools PHP Forms Validation, solo la sezione "Validate Form Data With PHP" https://www.w3schools.com/php/php_form_validation.asp

### Sessioni PHP e autenticazione

* W3schools PHP sessions: https://www.w3schools.com/php/php_sessions.asp
* Esempio generico di utilizzo sessioni http://php.net/manual/en/session.examples.basic.php
* Funzione `session_start()` http://php.net/manual/en/function.session-start.php

Il codice che fa utilizzo delle sessioni per l'autenticazione si trova su
https://github.com/feroda/lessons-itis/blob/master/2016-5BI/PHP/PROF/login.php

IMPORTANTE: la funzione `session_start()` è utilizzata come prima funzione del codice in `header.php`

## Esercizi

Per mercoledì 26 aprile:

* effettuare in locale il deploy((far offrire dal proprio Apache installato in localhost)) del sito https://github.com/feroda/lessons-itis/tree/master/2016-5BI/PHP/PROF
* verificare che funzionino le parti di inclusione, form e gestione, autenticazione, pagina segreta.
* (se si studia per se stessi) identificare (fin da ora) le parti di codice che svolgono tali funzioni

Per sabato 29 aprile:

* identificare le parti di codice che svoglono le funzioni verificate per merc 26
* in cosa differiscono le direttive `require` e `include`?
* descrivi il processo di inserimento dati e gestione di una FORM HTML, evidenzianto per ogni passo l'attore che lo compie (client o server), nei casi:
  * la form sia presente nella pagina `contact.html` e la gestione dei dati avvenga in `pagepc.php`
  * sia la gestione della form che la sua rappresentazione sia presente in un unico file `contact.php`

* cos'è una sessione?
* come viene gestita la verifica se l'utente è autenticato o meno con le sessioni in PHP?
* come viene mantenuta l'associazione della sessione in corso tra il client e il server?
