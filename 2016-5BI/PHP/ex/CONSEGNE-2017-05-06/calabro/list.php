<?php
include("header-1.php");
echo " commenti</title>";
include("header-2.php");

//require "create_me_persistent.php";

echo "<h1 align='center'>COMMENTI</h1>";
echo "<div align='center'>(nome;cognome;commento)</div><br>";
//echo "<p align='center'>";
echo "<ol>";
for($i=1;$i<$_SESSION["cont"]+1;$i++){
  if($_SESSION["names"][$i]==$_SESSION["username"]){
    $nome="<span class='sfondo-verde'>".$_SESSION["names"][$i];
  }
  else {
    $nome="<span>".$_SESSION["names"][$i];
  }
  echo "<li>".$nome."</span>;".$_SESSION["surnames"][$i].";".$_SESSION["comments"][$i]."</li>";

  /*if (!isset($colors)) {
    $colors = array();
  };
  do_save_user($name, $surname, $comment, $colors);*/

}
echo "</ol>";
//echo "</p>";

include("footer.php");
//dopo il footer
//close_db_conn();
?>
