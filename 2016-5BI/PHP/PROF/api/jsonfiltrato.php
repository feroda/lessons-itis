<?php

header('Content-type: application/json');

function get_data() {
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
    return $data;
};

$namelike=$_GET['name'];
$result=array();
if ($namelike) {

    foreach(get_data() as $el) {
        if (strpos(strtolower($el['nome']), strtolower($namelike)) !== false) {
            array_push($result, $el);
        }
    }
} else {
    $result = get_data();
}

echo json_encode($result);


?>
