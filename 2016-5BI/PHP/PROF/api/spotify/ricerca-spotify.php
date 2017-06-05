<?php

    require "lib-spotify.php";

    session_start();

    if (!isset($_SESSION["spotify_token"])) {
        echo "Redirigere su home.php";
        exit();
    }

    /* La documentazione della API REST spotify è all'URL
     * https://developer.spotify.com/web-api/endpoint-reference/
     * in particolare la ricerca:
     * https://developer.spotify.com/web-api/search-item/
     */

    $filter="Rock";
    $kw="";
    if (isset($_GET["keywords"])) {
        $kw=$_GET['keywords'];
        $filter=urlencode("$filter $kw");
        $spotifydata = spotify_do_search($_SESSION["spotify_token"], $filter);
    };
?>

<html>
<head>
    <title>Il sito del rock</title>
    <style type="text/css">
        .debug-info { display: none; }
        /*.debug-info { display: block; }*/
    </style>
</head>
<body>
    <p>Autenticazione spotify effettuata per questa app</p>
    <h1>Ricerca una canzone rock</h1>
    <form>
        Parole chiave: <input type="text" name="keywords" placeholder="Inserisci una canzone" value="<?php echo $kw ?>" />
    </form>

<?php

    if (isset($spotifydata)) {

        $spotifysongs = $spotifydata["tracks"]["items"];
        echo "<ol>";
        foreach ($spotifysongs as $el) {

            $album = $el["album"]["name"];
            $artist = $el["artists"][0]["name"];
            $name = $el["track_number"]." ".$el["name"];
            $preview_url = $el["preview_url"];
            $album_preview_img = $el["album"]["images"][1]["url"];
            echo "<li>";
            // elenco innestato. Sarebbe meglio isolarlo in una funzione (ad es: display_song)
            echo '<div class="wide-album">';
            echo '<img src="'.$album_preview_img.'" alt="image preview" />';
            echo "<ul>";
                echo "<li>Album: ".$album."</li>";
                echo "<li>Artist: ".$artist."</li>";
                echo "<li>Song: ".$name."</li>";
                echo '<li><a href="'.$preview_url.'">Listen a preview!</a></li>';
            echo "</ul>";
            echo '<div class="debug-info"><pre>'.print_r($el,1)."</pre></div>";
            echo '</div>';
            echo "</li>";
        }
        echo "</ol>";
    }
?>
</body>
</html>
