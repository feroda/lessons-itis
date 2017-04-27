<?php
    header('Content-type: application/json');
    $filter="Muse";
    if (!empty($_GET)) {
        $namelike=$_GET['name'];
        $filter=urlencode("$filter $namelike");
    };
    $data = file_get_contents("https://api.spotify.com/v1/search?q=$filter&type=track&market=IT");
    echo $data;
?>
