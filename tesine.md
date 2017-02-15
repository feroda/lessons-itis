* SPID
* Biblioteca scolastica con NFC + DB + APP
* V4Vendemmia operativo
* Cisco Packet Tracer Web Clone
* Migrazione di server GNU/Linux: P2V, da vecchia distro ad una nuova
* Soluzioni per la virtualizzazione
* Gestione di piu' reti con VLAN
* ARPs -> ARP crittografato a chiave pubblica
* Realizzare un bot Telegram per la chat di classe...ad esempio

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

- API Web server: caricaProgetto/salvaProgetto

- Database: 4 tabelle - utenti/apparati/connessioni/progetti

