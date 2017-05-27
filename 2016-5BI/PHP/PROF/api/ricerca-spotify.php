<?php
    $filter="Rock";
    if (isset($_GET["keywords"])) {
        $kw=$_GET['keywords'];
        $filter=urlencode("$filter $kw");
        $jsondata = file_get_contents("https://api.spotify.com/v1/search?q=$filter&type=track&market=IT");
        $spotifydata = json_decode($jsondata, true);
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
