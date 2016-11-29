
## Classe 4AIS - 2016-11-29 Verifica di SISTEMI - prof. Luca Ferroni

### Conoscenze

1. Quale programma si usa per verificare la raggiungibilità di un host in rete? (1pt)

2. Quali sono i parametri fondamentali per consentire al tuo host di essere raggiunto in rete locale? (2pt)

3. Se volessi visualizzare i parametri necessari per navigare con successo su Internet con un browser:
   * quali sono i 4 parametri da cercare? (3pt)
   * come li posso visualizzare? (2pt + bonus per vari modi)

4. A quali livelli ISO/OSI si appoggia il programma `ping`? e a quali livelli del TCP/IP?  (3pt)

### Debug di un problema di rete (5pt)

5. Non riesci ad effettuare con successo `ping 8.8.8.8`, ma riesci invece a fare ping ad un altro host sulla tua stessa LAN.

Elenca almeno 2 ipotesi per il malfunzionamento e il modo rispettivo con cui verifichi se sono esatte o meno.

## Check di appartenenza ad una rete (5pt)

Calcola l'indirizzo IP della rete per ognuna seguenti configurazioni:

- a. IP: 172.17.32.10, NETMASK: 255.255.255.0

- b. IP: 172.17.22.10, NETMASK: 255.255.255.0

- c. IP: 172.17.32.130, NETMASK: 255.255.255.0

- d. IP: 172.17.10.36, NETMASK: 255.255.0.0

- e. IP: 172.17.240.10, NETMASK: 255.255.0.0

- f. IP: 172.17.255.154, NETMASK: 255.255.0.0

- g. IP: 172.17.242.10, NETMASK: 255.0.0.0

Segna con uno stesso simbolo gli host che sono sulla stessa rete.
Se da "d." effettuo un `ping` verso "g.", ottengo correttamente risposta?

E verso "f."?


### Utilizzo base dell'analizzatore di rete Wireshark (4pt + bonus)

Avvia `wireshark` da amministratore di sistema, inizia ad acquisire pacchetti sulla tua interfaccia di rete.
Poi seleziona un pacchetto acquisito a tua scelta, che sia almeno di livello IP. Scrivi:

* Il nome del protocollo del pacchetto scelto
* Gli indirizzi IP sorgente e destinazione
* Gli indirizzi hardware (o MAC) sorgente e destinazione
* Sapresti disegnare il pacchetto a rettangoli mettendo in ognuno il livello TCP/IP corrispondente?


											Firma dell'alunno
______________________________
