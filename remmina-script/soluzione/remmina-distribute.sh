#!/bin/bash

utenti="$(ls /home)"

for user in $utenti; do

	cp remoto.sh /home/$user/Scrivania/remoto.sh

done
