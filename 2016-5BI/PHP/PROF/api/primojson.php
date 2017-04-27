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

include "data.php";
echo json_encode(get_data());


?>
