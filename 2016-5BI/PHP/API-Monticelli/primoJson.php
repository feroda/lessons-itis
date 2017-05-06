<?php

    $request = $_SERVER['REQUEST_URI'];
    if(strpos($request, 'songs', 30)!=false) {
      header("Content-Type: application/json");
      $data = array();
      $song = array("nome"=>"Romagna Mia", "artista"=>"Raul Casadei");
      array_push($data, $song);
      echo json_encode($data);
    }
    else echo 'API non gestita';
 ?>
