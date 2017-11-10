REMMINA

## README

L'obiettivo è di creare i file lanciatori di REMMINA sui desktop di tutti gli utenti. 

 0. Trovare l'eseguibile di `remmina` e se non presente nel vostro sistema installarlo (con `sudo apt-get install remmina`)

 1. Creare uno script `remoto.sh` che esegue il programma `remmina`

 2. Creare uno script di nome `remmina-distribute.sh` che:

 	a. Copi sul desktop di tutti gli utenti il file `remoto.sh` 

	b. Crei n script `remoto-$IP.sh`per ogni utente e per gli IP `10.2.60.100 10.2.4.140 10.2.4.11 10.2.7.100 10.2.40.100`

## FASE 2

 1. Cambiare il contenuto di `remoto.sh` in modo che esegua `remmina -c remmina.conf` da scaricare su https://github.com/feroda/lessons-itis/remmina-script/remmina.conf

 2. Sostituire (v. sotto) per ogni IP la stringa DASOSTITUIRE con l'IP specifico. 

**PER SOSTITUIRE**, usare il comando `sed` in questo modo:

  `sed -i "s/10.2.60.100/$IP/g" remmina.conf`


