
# Programmazione socket TCP

Un **socket** è una primitiva del sistema operativo che consente la comunicazione tra processi.
In particolare è laprimitiva usata per la comunicazione in rete.
Esistono vari tipi di **socket** e quello che interessa a noi ora è un socket internet TCP.

Grazie al socket TCP:

* un processo client è in grado di instaurare una connessione ad un server TCP
* un processo server è in grado di accettare connessioni dai client per poter fare il suo lavoro e rispondere

## Client TCP

Il processo client usa un socket TCP in questo modo:

- `CREATE` <- richiede al sistema operativo una struttura socket
- `CONNECT` <- connette il socket ad una IP e una PORTA. L'IP è caratteristico del livello IP dello stack TCP/IP, mentre la porta è carattaristica del livello TCP dello stesso stack
- `SEND` <- invia dati al server una volta connesso
- `RECV` <- riceve dati dal server in risposta
- `CLOSE` <- chiude il socket e quindi la connessione

## Lo stack TCP/IP

Seguendo lo stack TCP/IP un socket TCP si colloca proprio al di sopra del livello TCP, il livello di trasporto.


## 2016-11-17 Attività di laboratorio

* Copiato il client
* Indirizzata connessione verso l'echo server

## 2016-11-18 Riepilogo

- Alla lavagna Gabriele Fava (+)

### Riprodurre connessione socket lato client

- Su windows: installare Python 2.7 con Anaconda
- Replicare l'esempio fatto in classe. Copiare https://docs.python.org/2/library/socket.html#example
- Copiare il client
- Testare la comunicazione con www.google.it porta 80
- Copiare il server. Testare la comunicazione in locale (127.0.0.1)
- Farsi dare un messaggio dall'utente con `raw_input`
