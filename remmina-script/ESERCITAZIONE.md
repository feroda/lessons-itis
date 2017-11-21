REMMINA

## README

L'obiettivo è di creare i file lanciatori di REMMINA sui desktop di tutti gli utenti.

 0. Trovare l'eseguibile di `remmina` e se non presente nel vostro sistema installarlo (con `sudo apt-get install remmina`)

 1. Creare uno script `remoto.sh` che esegue il programma `remmina`

 2. Creare uno script di nome `remmina-distribute.sh` che:

 	a. Copi sul desktop di tutti gli utenti il file `remoto.sh`

	b. Crei n script `remoto-$IP.sh`per ogni utente e per gli IP `10.2.60.100 10.2.4.140 10.2.4.11 10.2.7.100 10.2.40.100`

## FASE 2

 1. Cambiare il contenuto di `remoto.sh` in modo che esegua `remmina -c VM.remmina` da scaricare su https://github.com/feroda/lessons-itis/blob/master/remmina-script/VM.remmina

 2. Copiare anche il file `VM.remmina` sul desktop di ogni utente

## FASE 3

 1. Per ogni IP creare un file di configurazione di remmina (`VM-$IP.remmina`) con l'IP interessato.
    Per fare questo eseguire `sed "s/10.2.60.100/$IP/g" VM.remmina` e redirezionare l'output su `VM-$IP.remmina`

 2. In ogni file `remoto-$IP.sh` eseguire `remmina -c VM-$IP.remmina`

 3. Distribuire agli utenti con contorno di carote

