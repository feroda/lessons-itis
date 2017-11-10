#!/bin/bash

echo "DA PROVARE LA RIGA del 'getty' prima di abilitare, ora non ho Ubuntu sottomano"
exit 10

if [ -z "$1" ]; then
    echo "Usage: $0 <IP VM>";
    exit 100
fi

IP="$1"

cp -a systemd-udevd.service.d/ /etc/systemd/system/
cp 99-usb.rules /etc/udev/rules.d/

mkdir /mnt/usb
chmod 0666 /mnt/usb
if [ $(grep chiavetta-usb | wc -l) -eq 0 ]; then
    echo "/dev/chiavetta-usb      /mnt/usb/       auto            rw,relatime,noauto,users   0   0" >> /etc/fstab
fi

sed -i.bak 's/getty/getty -a utente/g' /etc/systemd/getty@.service
sed -e "s/10.2.60.100/$IP/g" remmina.conf > /home/utente/.remmina/
