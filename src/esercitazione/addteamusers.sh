#!/bin/bash

if [ -z $2 ]; then
   echo "Usage $0 <username> <ip address> [ip address] [...]"
   exit 100;
fi

USERNAME=$1
shift
IPs=$@

echo >> teamusers.txt
echo "Creazione utente su vari IP" >> teamusers.txt

for ip in $IPs; do
    ssh -t utente@$ip "sudo userdel $USERNAME; sudo useradd -m -G adm,sudo,cdrom,dip,plugdev,lpadmin,sambashare -s /bin/bash -p '$(openssl passwd -1 $USERNAME)' $USERNAME"
    echo "$USERNAME -> $ip" >> teamusers.txt
done
