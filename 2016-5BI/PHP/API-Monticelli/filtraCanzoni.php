<?php
  $data = array();
      $song = array(
	array("name"=>"Romagna Mia", "artist"=>"Raul Casadei"),
	array("name"=>"Shape of You", "artist"=>"Ed Sheeran"),
	array("name"=>"Billie Jean", "artist"=>"Michael Jackson"),
	array("name"=>"Thriller", "artist"=>"Michael Jackson"),
	array("name"=>"Subeme la Radio", "artist"=>"Enrique Iglesias")
	);

  // dico al web server di mettere questo specifico header di risposta
  // il che vuol dire che nel contenuto avro' un formato json
  header("Content-Type: application/json");
  // verifico che il parametro name nella querystring sia settato
  if (isset($_GET["name"])) {

      $name = urldecode($_GET["name"]);
	if(empty($name)) {
		echo "Empty parameter name";
		exit;
	}
	for($i = 0; $i <  count($song); $i++) {

		if(strstr($song[$i]["name"], $name)!==false)
			array_push($data, $song[$i]);

	}

      echo json_encode($data);
} else {
      echo json_encode($song);
}
 ?>
