<?php

//Eseguendo l'istruzione header(..) del PHP
//Imposto l'intestazione corrispondente del pacchetto HTTP di risposta.
//In questo caso specifico se imposto Location, PHP imposterà 
//un codice di risposta 302 (Found = redirezione temporanea)
header("Location: https://www.google.it");

//PER VERIFICARE IL FUNZIONAMENTO DEL CODICE 302
//NELLO SCAMBIO DI MESSAGGI HTTP TRA CLIENT E SERVER,
//DECOMMENTARE LA SEGUENTE RIGA (che deve essere eseguita dopo l'impostazione di Location)
//header("HTTP/1.0 200 Ok");

echo "Questo contenuto non sarà visualizzato";
echo " perché il browser ti ha mandato su www.google.it";
?>
