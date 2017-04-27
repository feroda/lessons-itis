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

$data = array();
$song = array(
    'nome' => 'Romagna mia',
    'album'=> 'Album1',
    'artista' => 'Casadei');

array_push($data, $song);

$song = array(
    'nome' => 'Montagne verdi',
    'album'=> 'Album1',
    'artista' => 'Marcella Bella');
array_push($data, $song);

$song = array(
    'nome' => 'Felicità',
    'album'=> 'Album2',
    'artista' => 'Albano e Romina Power');
array_push($data, $song);

$song = array(
    'nome' => 'Stasera l\'aria è fresca',
    'album'=> 'Album3',
    'artista' => 'Goran Kusminak');
array_push($data, $song);

echo json_encode($data);


?>
