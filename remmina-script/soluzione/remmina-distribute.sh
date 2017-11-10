#!/bin/bash

utenti="$(ls /home)"
TUTTI_GLI_IP="10.2.60.100 10.2.4.140 10.2.4.11 10.2.7.100 10.2.40.100"

for user in $utenti; do

	for IP in $TUTTI_GLI_IP; do
		cp remoto.sh /home/$user/Scrivania/remoto-$IP.sh
	done
done
