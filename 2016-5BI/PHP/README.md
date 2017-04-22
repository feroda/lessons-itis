# La mia prima pagina PHP con FORM e AUTENTICAZIONE.

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
in cosa differiscono?

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

