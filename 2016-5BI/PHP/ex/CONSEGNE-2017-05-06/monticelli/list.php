<?php
session_start();
require 'header-1.php';
$title.="List";
require 'header-2.php';
require 'login_data.php';
?>

<div class="container"> 
<table class="table">
  <thead>
    <tr>
      <th> Nome </th>
      <th> Cognome </th>
      <th> Commento </th>
    </tr>
  </thead>
  <tbody>
    <?php
    for($i = 0; $i < count($_SESSION["input"]); $i++) {
      echo '<tr>';
      echo '<td>'.$_SESSION["input"][$i]["name"].'</td>';
      echo '<td>'.$_SESSION["input"][$i]["surname"].'</td>';
      echo '<td>'.$_SESSION["input"][$i]["comment"].'</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>


</div>
