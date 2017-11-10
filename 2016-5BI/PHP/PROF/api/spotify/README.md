# Mini app di ricerca Spotify

Questa directory include:

* [lib-http.php](./lib-http.php): funzione di libreria per effettuare richieste generiche HTTP (basandosi sulle necessità della API Spotify)
* [lib-spotify.php](./lib-spotify.php): funzioni di libreria per effettuare login e ricerca su Spotify

* [login-spotify.php.dist](./login-spotify.php.dist): pagina di Login per la web app di ricerca. Da inserire `client_id` e `client_secret`
* [ricerca-spotify.php](./ricerca-spotify.php): pagina di ricerca canzoni

## Per verificare il login

Effettuare il deploy della directory in una directory accessibile dal Web server, poi:

* Copiare `test-login.php.dist` in `test-login.php`;
* Editare il file inserendo `client_id` e `client_secret` della propria app registrata su https://developer.spotify.com/my-applications/
* Eseguire da riga di comando `php -f test-login.php`;

Lo script fornisce maggiori dettagli se lanciato da terminale, ma può essere eseguito anche dal server web
andando al suo URL.

## Riferimenti

Il workflow di autenticazione seguito è quello per le app che non hanno bisogno di modificare/visualizzare dati utente:
https://developer.spotify.com/web-api/authorization-guide/#client-credentials-flow

L'endpoint della API di ricerca è descritto all'URL https://developer.spotify.com/web-api/search-item/
