<?php
  require("header1.php");
  $title="home";
  require 'header2.php';
  if (isset($_SESSION["username"]))
  {
    echo"<h1>Benvenuto ".$_SESSION["username"]."</h1>";
    echo" <form name='logout' action='logout.php' method='post'>
          <button type='submit'>esci</button>
          </form>";
  }else {
    echo"<h1>Benvenuto</h1>";
    echo" <form name='login' action='login.php' method='post'>
          <button type='submit'>Entra</button>
          </form>";

  }


  include("footer.php");
 ?>
