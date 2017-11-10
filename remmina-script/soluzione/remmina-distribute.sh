#!/bin/bash

utenti="$(ls /home)"

for user in $utenti; do

	echo ciao > /home/$user/Scrivania/prova.txt
done
