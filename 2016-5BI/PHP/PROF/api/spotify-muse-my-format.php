<?php

header('Content-type: application/json');

function get_artist_songs($morefilter) {
    $filter=urlencode("Muse $morefilter");
    $data = file_get_contents("https://api.spotify.com/v1/search?q=$filter&type=track&market=IT");
    return json_decode($data, true);
};

$namelike = "";
if (!empty($_GET)) {
    $namelike=$_GET['name'];
};
$spotifysongs=get_artist_songs($namelike)["tracks"]["items"];
//echo json_encode($spotifysongs);

//Formatta le canzoni nel mio formato
$result=array();
foreach ($spotifysongs as $el) {
    $mysongformat = array(
        "album" => $el["album"]["name"],
        "artista" => $el["artists"][0]["name"],
        "nome" => $el["track_number"]." ".$el["name"]
    );
    array_push($result, $mysongformat);
}
echo json_encode($result);
?>
