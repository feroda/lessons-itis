<?php

//spazio per includere header-1

require "create_me_persistent.php";

$name="pippo";
$surname="baudo";
$comment="ciao";
if (!isset($colors)) {
  $colors = array();
};
do_save_user($name, $surname, $comment, $colors);

close_db_conn();
?>
