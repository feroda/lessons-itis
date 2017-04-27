<?php

header('Content-type: application/json');

function get_data() {
    $elenco = array();
    $city = array('nome' => 'Fabriano', 'abitanti'=> 35000);
    array_push($elenco, $city);
    $city = array('nome' => 'Sassoferrato', 'abitanti'=> 10000);
    array_push($elenco, $city);
    $city = array('nome' => 'Roma', 'abitanti'=> 2000000);
    array_push($elenco, $city);
    return $elenco;
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
