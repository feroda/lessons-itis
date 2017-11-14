#!/bin/bash

if [ -z "$1" ]; then
    echo "Usage: $0 <IP VM>";
    exit 100
fi

IP="$1"

cp -a systemd-udevd.service.d/ /etc/systemd/system/
cp 99-usb.rules /etc/udev/rules.d/

mkdir -p /mnt/usb
chmod 0666 /mnt/usb

if [ $(grep chiavetta-usb /etc/fstab | wc -l) -eq 0 ]; then
    echo "/dev/chiavetta-usb      /mnt/usb/       auto            rw,relatime,noauto,users   0   0" >> /etc/fstab
fi

if [ $(grep -- '-a utente' /lib/systemd/system/getty@.service | wc -l) -eq 0 ]; then
    sed -i.bak 's/getty/getty -a utente/g' /lib/systemd/system/getty@.service
fi

sed -e "s/10.2.60.100/$IP/g" VM.remmina > /home/utente/.remmina/VM-$IP.remmina
chown utente:utente /home/utente/.remmina/VM-$IP.remmina

echo "Fatto tutto: ora bisogna mettere 'remmina -c /home/utente/.remmina/VM-$IP.remmina' in autostart del sistema grafico"
