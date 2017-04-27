<?php

header('Content-type: application/json');

//echo json_encode([1,2,3]);

//echo "\n";
/*echo "[{
 'nome': 'Fabriano',
 'abitanti': 35000
},{
    'nome': 'Sassoferrato',
    'abitanti': 10000
},{
    'nome': 'Roma',
        'abitanti': 2000000
}]";*/

$elenco = array();
$city = array('nome' => 'Fabriano', 'abitanti'=> 35000);
array_push($elenco, $city);
$city = array('nome' => 'Sassoferrato', 'abitanti'=> 10000);
array_push($elenco, $city);
$city = array('nome' => 'Roma', 'abitanti'=> 2000000);
array_push($elenco, $city);

echo json_encode($elenco);


?>
