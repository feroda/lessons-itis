
## Classe 5BI - 2016-11-26 Verifica di SISTEMI - prof. Luca Ferroni

### Conoscenze

1. Vuoi raggiungere un host sulla tua stessa rete (3pt):
    a. quali sono i parametri fondamentali?
    b. come fai a verificare che sono corretti?
    c. come li metti sotto test?

2. Riparti da un host privo di configurazione di rete. Vuoi raggiungere un host su Internet (3pt):
    a. quali sono i parametri fondamentali?
    b. come fai a verificare che (i nuovi) sono corretti?
    c. come li metti sotto test?

3. Riparti da un host privo di configurazione di rete. Vuoi verificare la navigazione web (3pt):
    a. quali sono i parametri fondamentali?
    b. come fai a verificare che (i nuovi) sono corretti?
    c. come li metti sotto test?

4. Cos'è il default gateway?  (3pt)
5. A quali livelli ISO/OSI si appoggia il programma `ping`? e a quali livelli del TCP/IP?  (2pt)

### Debug di un problema di navigazione web (6pt)

6. Non riesci a visualizzare la pagina di un sito web che hai appena digitato, ma hai effettuato con successo:
	* un `ping` ad un altro host della tua LAN e
	* un `ping` all'indirizzo IP che hai impostato come default gateway

 Formula ipotesi sul mancato funzionamento e per ognuna scrivi come fai ad accertarti che sono esatte o meno

## Check di appartenenza ad una rete (5pt + bonus)

Indica con uno **stesso simbolo** (sopra o sotto) gli host qui di seguito che potranno comunicare senza problemi tra di loro in rete locale. Dimostra come ci sei riuscito per almeno 2 reti con subnet mask diversa. **Sbarra** gli host che avranno sicuramente problemi. Perché?

* 172.16.13.14/24, 132.16.13.15/24, 172.16.255.254/24, 172.16.255.255/24, 172.16.255.256/24, 172.16.30.10/16, 172.16.45.32/16

* 10.8.8.4/16, 10.8.256.4/16, 10.10.10.4/16

* 12.32.10.2/8, 12.255.255.254/8, 12.32.10.1/8, 12.32.10.255/8, 12.32.255.255/16, 12.0.0.1/8

#### PLUS

Sai dire ed eventualmente dimostrare quali tra 12.5.0.13/28, 12.5.0.24/28, 12.5.0.30/28 comunicano tra loro se direttamente connessi?

### Incapsulamento e spacchettamento (5pt + bonus)

Avvia `wireshark` da amministratore di sistema e seleziona un pacchetto acquisito a tua scelta, che sia almeno di livello IP. Simula l'incapsulamento e lo spacchettamento del pacchetto in questo modo:

* prendi l'ultimo POSTIT e scrivici sopra il protocollo del pacchetto scelto
* poi attacca sopra un POSTIT per ogni protocollo di livello superiore scrivendone il nome e le caratteristiche essenziali
* strappa i POSTIT in eccesso se ce ne sono
* infine per ogni POSTIT disegna 2 cerchi inserendovi `Sn` e `Dm` dove `n`ed `m` sono l'ordine di incapsulamento e spacchettamento rispettivamente nell'host sorgente e nell'host destinazione
* se vuoi puoi aggiungere altre caratteristiche secondarie per ogni livello contrassegnandole con un `*`(asterisco)

											Firma dell'alunno
______________________________