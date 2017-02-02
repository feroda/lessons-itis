# Lo scenario

Intendiamo risolvere il problema di scaricare un file su un server remoto
via terminale

## Problema 1: scaricare un file

URL di esempio usato in 5AI: http://www.befair.it/opendata-presentation.tar.gz

  - Andare con un browser sull'url del file binario (esempio)
  - Scaricare il file
  - Poi provare con telnet

```
telnet www.befair.it 80
GET /opendata-presentation.tar.gz HTTP/1.1
Host: www.befair.it


```

Il risultato è imbarazzante! Tutto binario bisogna aprire un altro terminale!

  - Andiamo a vedere come fa il browser a capire che si tratta di un file binario

```
telnet www.befair.it 80
HEAD /opendata-presentation.tar.gz HTTP/1.1
Host: www.befair.it


```

Vediamo in risposta il `Content-Type` binario ad esempio `application/octet-stream`
che è usato dal browser per capire che il contenuto è un file binario e ci deve chiedere
se salvarlo o aprirlo.

A questo punto abbiamo raggiunto una risorsa binaria. Ora scarichiamo il file da riga di comando

## Scaricare il file da terminale

Per scaricare un file da terminale possiamo usare `wget` oppure `curl -XGET` seguiti dall' `URL`
della risorsa web. Net caso di curl dovremo redirigere l'output su un file.

## Accedere ad una macchina remota

L'accesso alla macchina remota può avvenire tramite il client SSH che contatterà il servizio SSH inviando messaggi di protocollo applicativo SSH. Che è un protocollo crittografato.

Accedendo quindi all'altro indirizzo IP si può scaricare il file remoto comodamente con `wget`


