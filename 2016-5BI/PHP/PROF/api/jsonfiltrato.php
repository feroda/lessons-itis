<?php

header('Content-type: application/json');

include "data.php";

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
