* SPID - Sistema Pubblico di Identità Digitale

* Gestione di una biblioteca scolastica con NFC + DB + APP (tesina per almeno 3 persone):
  * dalla biblioteca di Alessandria alla biblioteca multimediale
  * tecniche di classificazione documentale/bibliotecaria

* V4Vendemmia operativo
  * check e recupero di ISO di sistemi operativi aggiornati via rete
* Cisco Packet Tracer Web Clone

* Migrazione di server GNU/Linux: P2V, da vecchia distro ad una nuova
* Soluzioni per la virtualizzazione
* Gestione di piu' reti con VLAN
* ARPs -> ARP crittografato a chiave pubblica
* Realizzare un bot Telegram per la chat di classe...ad esempio
* Progetto rete di Arduino
    * elettronica, sensori, progettazione della rete (architettura di rete)
    * aggregazione dati su database
    * esposizione ad una app tramite web server
    * implementazione app
* Autolavaggio con Arduino

## Cisco PT dummy

### Funzionalita' base

- drag&drop
- inserire PC -> config ip/netmask/gw
- inserire hub -> ripetizione segnale
- inserire router -> configurare almeno due interfacce distinte
- stabilire collegamenti tra dispositivi
- [opzionale]

### Architettura del software

- applicativo scaricato in locale sul client al momento della visita

- API Web server:
    * GET /projects/ -> restituisce la lista dei progetti
    * GET /projects/:id -> restituisce il progetto :id
    * PUT /projects/:id -> modifica il progetto :id
    * POST /projects -> salva nuovi progetti (in genere uno)

- Database: 4 tabelle:
    * utenti
    * apparati
    * connessioni
    * progetti

#### Problematiche di base

- Definire la API -> fatto
- Utilizzare un [canvas HTML5](https://www.w3schools.com/HTML/html5_canvas.asp) e salvarlo sul server -> da provare [conversione in SVG](http://www.svgopen.org/2010/papers/62-From_SVG_to_Canvas_and_Back/#canvas_to_svg)
