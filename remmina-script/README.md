
# Configurazione di Remmina per MultiPoint@School

NOTA: il precedente README.md con l'esercitazione per la classe 4AIS è stato spostato in ESERCITAZIONE.md nella stessa directory
NOTA: questo che state leggendo è simile alla vostra esercitazione, ma non lo è.

L'unica cosa da fare per raggiungere l'obiettivo è eseguire da terminale `sudo prepara_postazione.sh <IP MACCHINA VIRTUALE>`
ad esempio: `sudo prepara_postazione.sh 10.2.60.100`

## Obiettivo

Questo progetto consente di configurare le macchine Ubuntu dell'IIS Merloni-Miliani
di Fabriano (AN) per:

- avviarsi al boot con autologin
- predisporre un file di configurazione di `remmina` con RDP + condivisione stampante
- + condivisione di una directory predefinita con i server MP
- agganciare una chiavetta inserita alla directory di cui al punto precedente in modo da vederla sul server


## Dettagli

Lo script:

1. copia la directory `systemd-udevd.service.d/` in `/etc/systemd/system` per consentire il mount di una chiavetta inserita
2. copia il file `99-usb.rules` con le regole udev in `/etc/udev/rules.d/` per eseguire il mount ad ogni inserimento di chiavetta
3. crea la directory `/mnt/usb`
4. aggiunge in `/etc/fstab` la riga per il mount della chiavetta su `/mnt/usb`
5. aggiunge l'utente di autologin `utente` nel file `/etc/systemd/system/getty@.service`
6. copia una configurazione di base `remmina.conf` in `/home/utente/.remmina/` con l'IP indicato come parametro

Bisogna solo aggiungere il programma `remmina -c /home/utente/.remmina/remmina.conf` nei programmi avviati automaticamente all'ingresso della sessione utente
