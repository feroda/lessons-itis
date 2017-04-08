# Esercizi HTML/PHP per Pasqua

Ci sono 3 esercizi da svolgere. Il primo è per tutti.
Chi si ferma qui dovrà cercare di realizzare un sito gradevole e abbastanza completo.
Chi prosegue potrà risolvere il primo in modo minimale, quindi rispettando
al minimo i requisiti richiesti.

## Realizzare il proprio sito statico

Per tutti:

Utilizzando HTML + CSS basandosi sul template (modello)
`primobootstrap-prof.html` realizzare una propria pagina web
statica. Il sito deve contenere:
  * un'immagine,
  * alcune informazioni testuali,
  * un elenco non ordinato
  * almeno un link a URL esterni al sito stesso

Il sito è composto da almeno 3 pagine: index.html, about.html, contact.html

Come detto, chi non prosegue verso gli esercizi successivi perché non
sufficientemente approfondito in classe, dedichi più tempo
a questo esercizio. Arricchisca come vuole. Chi effettua invece i
successivi può fare il sito di 2 pagine ed inserire frettolosamente
gli elementi richiesti.

## Creare una FORM html che interagisca con PHP

### La form HTML

Integrare nella pagina contact.html la form html:

```
<form action="pagepc.php" method="GET">
  Inserisci il nome: <input type="textbox" name="n">
  <p>Commento: <textarea name="comment" rows="10" cols="30">
    Inserire qui il tuo commento
  </textarea></p>
  <p><input type="submit"></p>
</form>
```

Per spiegazioni sugli elementi della form vedere https://www.w3schools.com/html/html_form_elements.asp

```
<?php
  $nome=$_GET["n"];
  echo "Ciao ".$nome;
  echo "Il tuo commento è stato ricevuto";
?>
```

recuperare e visualizzare anche il contenuto del commento.

### Deploy sul webserver

Effettuare il deploy (il rilascio) del sito (files html+php) sul proprio webserver.

## Effettuare la richiesta della form tramite POST

L'attributo `method` del tag `form` (reference su https://www.w3schools.com/tags/tag_form.asp) può assumere come valore
GET o POST.

Sostituendo negli estratti qui sopra GET a POST si ottiene lo stesso risultato,
ma cosa è cambiato? Se i parametri non sono più stati messi nell'URL, dove sono stati messi?

Aprire gli strumenti di sviluppo del browser per risolvere il dilemma.
