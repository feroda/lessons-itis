<?php

function do_rest($method, $url, $headers=NULL, $body=NULL,$debug=false) {
    /* Effettua una richiesta HTTP ad una Web API RESTful.
     *
     * @input
     * - metodo
     * - url
     * - body -> opzionale body
     * - debug -> se true stampa richieste e risposte HTTP
     *
     */

    global $http_handle;

    // Inizializza la libreria php-curl
    // if(!isset($http_handle))
    $http_handle = curl_init();

    // Definisce i parametri necessari per la richiesta HTTP
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $method, // GET POST PUT PATCH DELETE HEAD OPTIONS
        CURLOPT_POSTFIELDS => $body,
        CURLOPT_RETURNTRANSFER	=> true, // restituisce in output il body
    );
    if ($headers != NULL) {
        $options[CURLOPT_HTTPHEADER] = $headers;
    }

    if ($debug === true) {
        // DEBUG -> mostra le richieste e risposte HTTP
        $options[CURLOPT_VERBOSE] = true;
    }

    // e li imposta
    curl_setopt_array($http_handle, $options);

    // invia la richiesta alla Web API e aspetta la risposta
    $response = curl_exec($http_handle);

    if ($debug === true) {
        echo "\nResponse from REST API: \n";
        print_r($response);
        echo "\n\n";
    }
    return $response;
}


?>
