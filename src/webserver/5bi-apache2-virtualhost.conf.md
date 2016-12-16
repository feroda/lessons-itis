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
* Aggiungere un nome host a piacere nel file `/etc/hosts`

### Verificare con telnet. Ad esempio

```
# telnet 10.2.29.10 80

GET / HTTP/1.1
Host: 5bi.prova-cesari.it
```

Risposta

```
HTTP/1.1 200 OK
Date: Fri, 16 Dec 2016 08:52:38 GMT
Server: Apache/2.4.12 (Ubuntu)
Last-Modified: Fri, 16 Dec 2016 08:44:04 GMT
ETag: "61-543c29280e6dc"
Accept-Ranges: bytes
Content-Length: 97
Vary: Accept-Encoding
Content-Type: text/html

<HTML>

<HEAD>
    <TITLE>PROVA</TITLE>
</HEAD>

<BODY>
    CIAOOOOOOOOOOOOOOO
</BODY>
</HTML>
```




