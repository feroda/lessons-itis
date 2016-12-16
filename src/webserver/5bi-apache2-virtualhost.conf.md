# Il web server

(da riempire TODO)

## Esempio di configurazione di un VirtualHost in Apache2

```
<VirtualHost *:80>
    # ServerName 5bi.prof-ferroni.it
    ServerName localhost
    DocumentRoot /var/www/5bi/
    <Directory /var/www/5bi/>
        Require all granted
    </Directory>
</VirtualHost>
```

### Suggerimenti

* Disabilitare il virtualhost di default: `sudo a2dissite 000-default`
* Abilitare un virtualhost: `sudo a2ensite 5bi`
* Riavviare il server web `systemctl reload apache2` o `service apache2 reload`
* Per creare una directory `sudo mkdir /var/www/5bi/`
* Bisogna creare un file `/var/www/5bi/index.html` con un contenuto a piacimento


