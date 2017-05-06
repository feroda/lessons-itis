<?php

header('Content-type: application/json');

require "data.php";

if (isset($_GET['name'])) {
  $namelike=$_GET['name'];
  $result=array();
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
