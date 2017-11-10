<?php

require "lib-http.php";

/* Contiene 2 funzioni:
 * - spotify_do_login -> ottiene l'access_token da spotify
 * - spotify_do_search -> effettua una richiesta alla API di ricerca Spotify
 */

function spotify_do_login($client_id, $client_secret, $debug=false) {

    /* Autenticazione alla Web API di Spotify
     * seguendo il flusso di autenticazione descritto all'URL
     * https://developer.spotify.com/web-api/authorization-guide/#client-credentials-flow
     *
     * Questo flusso consente di ottenere un token di autenticazione (`access_token`)
     * per tutte le successive richieste HTTP alla Web API,
     * ma non consente di ottenere autorizzazioni per accedere
     * o gestire i dati privati di un utente registrato
     *
     * La caratteristica di questa richiesta è di inviare una intestazione HTTP
     * di tipo
     * Authorization: Basic <codifica base64 di client_id:client_secret>
     *
     * dove client_id e client_secret sono forniti da spofity dopo la registrazione
     * di una app da parte di un utente all'URL https://developer.spotify.com/my-applications/
     *
     * Esempio di pacchetto:
     *
     * ```
     * POST /api/token HTTP/1.1
     * Host: accounts.spotify.com
     * Authorization: Basic ZjM4ZjAw...WY0MzE=
     * Content-Type: application/x-www-form-urlencoded
     *
     * grant_type=client_credentials
     * ```
     *
     * @input
     * - client_id di tipo string fornito da Spotify
     * - client_secret di tipo string fornito da Spotify
     *
     * @output
     * - access_token di tipo string
     */

    $url = "https://accounts.spotify.com/api/token";
    $credenziali = $client_id.":".$client_secret;
    $headers = array(
        "Authorization: Basic " . base64_encode($credenziali)
    );
    $body = "grant_type=client_credentials";

    $response = do_rest("POST", $url, $headers, $body, $debug);

    /* Come documentato all'url con il Client Workflow
     * la risposta è un JSON con i campi:
     * - "access_token",
     * - "token_type" e
     * - "expires_in"
     *
     * quindi decodifico il json mettendolo in un array associativo
     * e restituisco l'access_token
     */
    $access_token = json_decode($response, true)["access_token"];
    return $access_token;
}


function spotify_do_search($access_token, $filter) {

    /*
     * La documentazione invece della ricerca tramite Web API Spotify
     * è reperibile all'URL:
     * https://developer.spotify.com/web-api/search-item/

     * Per l'autenticazione, secondo quanto documentato sempre all'URL
     * https://developer.spotify.com/web-api/authorization-guide/#client-credentials-flow
     *
     * Il token ottenuto deve essere passato nelle intestazioni
     * delle successive richieste in questo modo:
     *
     * Authorization: Bearer <token>
     *
     */

    $url = "https://api.spotify.com/v1/search?q=$filter&type=track&market=IT";
    $headers = array(
        "Authorization: Bearer " . $access_token
    );

    $jsondata = do_rest("GET", $url, $headers);
    return json_decode($jsondata, true);




}

?>
