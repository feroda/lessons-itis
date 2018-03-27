
# La mia prima pagina PHP con FORM e AUTENTICAZIONE.

URL: https://github.com/feroda/lessons-itis/blob/master/2016-5BI/PHP/SESSIONI.md

## Sessioni PHP e autenticazione

Ci sono vari modi per gestire l'autenticazione in una applicazione web, in PHP di solito si sfrutta il meccanismo delle **sessioni**.

### Cos'è una sessione?

Tradotto liberamente da https://www.w3schools.com/php/php_sessions.asp

Quando lavori con una applicazione, la apri, effettui alcune modifiche e poi la chiudi. 
Questo è più o meno una sessione. Il computer sa chi sei, sa quando avvii l'applicazione e quando la chiudi.

Su Internet c'è un problema: il server web non sa chi sei o cosa fai perché l'indirizzo HTTP (URL) non mantiene lo stato.

Le variabili di sessione risolvono questo problema memorizzando informazioni relative all'utente che possono essere riutilizzate
su pagine diverse (per esempio: lo username, il colore preferito, etc.).

Per default, le variabili di sessione durano finché l'utente non chiude il browser.

**Quindi le variabili di sessione mantengono le informazione su un singolo utente e sono disponibili in tutte le pagine dell'applicazione web**

### Come è possibile mantenere le variabili di sessione attraverso differenti richieste HTTP?

Tradotto liberamente da http://php.net/manual/en/intro.session.php

Ad ogni visitatore che accede una pagina web è assegnato un identificatore univoco, 
il cosiddetto *identificativo di sessione*. 
Esso può essere memorizzato in un *cookie* (che viene inviato dal web server al browser e il browser ad ogni successiva richiesta rimanderà), 
oppure propagato nell'URL (come parametro nel querystring ad esempio)

Grazie a questo codice identificativo della sessione (detto anche *token di sessione*) è possibile
mantenere lato server (in PHP in questo caso) delle variabili condivise attraverso tutti gli accessi al sito da parte dello stesso utente.

Per fare ciò il PHP mette a disposizione la *variabile superglobal* `$_SESSION`

**IMPORTANTE: per poter utilizzare `$_SESSION` è necessario invocare la funzione `session_start()` come prima funzione del codice.**

## Codice da studiare

### index.php

La prima pagina che si apre: mostra la possibilità di andare alla pagina di login (login.php)
se non è stata settata la chiave 'login' nella superglobal `$_SESSION`,
o altrimenti di accedere alla pagina di Logout (logout.php):

```
<?php
  session_start();

  if(!(isset($_SESSION['login']) && $_SESSION['login'] != '')){
    echo "<h3>Non sei loggato, per accedere </h3>";
    echo '<a href="login.php">CLICCA QUI</a>';
  }
  else{
    echo "<h3>Ciao ".$_SESSION['login']." ora puoi anche uscire</h3>";
    echo '<a href="logout.php">Logout</a>';
  }
?>
```

### login.php

Di base mostra la form di login. Se viene acceduta tramite POST HTTP, 
recupera le chiavi 'username' e 'password' dalla superglobal `$_POST`
e ne confronta i valori con 2 stringhe predefinite. 

**Se le stringhe corrispondono, imposta un valore per la chiave 'login' della superglobal `$_SESSION`**

**NOTA**: in questo caso si viene rediretti alla pagina `index.php` tramite codice HTTP 302

```
<?php
session_start();
$username="";
$password="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $username=$_POST['username'];
  $password=$_POST['password'];

  if($username=="utente" && $password=="utente"){
      $_SESSION['login'] = $username;
			header ("Location: index.php");
      exit;
  }
  else {
    $_SESSION['login'] ="";
  }
}
?>

<p>Puoi entrare con utente:utente</p>
<form name="login" action="" method="POST">
Utente<input name="username" type="text" value="">
<br>
<p>Password<input name="password" type="password" value="" size="20"> </p>
<button type="submit">INVIA</button>
</form>
```

### logout.php

La pagina `logout.php` non fa altro che distruggere tutte le informazioni sulla sessione corrente.
Poi reindirizza l'utente alla pagina `index.php` (sempre con un codice HTTP 302)

```
<?php
  session_start();
  session_destroy();
  header('Location:index.php');
  exit;
?>
```

## Ulteriori riferimenti

* Esempio generico di utilizzo sessioni http://php.net/manual/en/session.examples.basic.php
* Funzione `session_start()` http://php.net/manual/en/function.session-start.php
* Un altro codice che fa utilizzo delle sessioni per l'autenticazione si trova su
https://github.com/feroda/lessons-itis/blob/master/2016-5BI/PHP/PROF/login.php

### Gestione forms in PHP

* W3Schools PHP Forms Handling https://www.w3schools.com/php/php_forms.asp
* W3Schools PHP Forms Validation, solo la sezione "Validate Form Data With PHP" https://www.w3schools.com/php/php_form_validation.asp

## Esercizi

Per venerdì 6 aprile:

* studiare questo documento
* provare ad effettuare il deploy del codice (farlo funzionare su un sito web, si può creare un account su https://www.netsons.com/hosting-webapp.php) 

con l'obiettivo di rispondere alle seguenti domande:

* cos'è una sessione?
* come viene gestita la verifica se l'utente è autenticato o meno con le sessioni in PHP?
* come viene mantenuta l'associazione della sessione in corso tra il client e il server?
