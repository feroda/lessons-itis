<?php
  session_start();
  require 'header-1.php';
  $title.="Home";
  require 'header-2.php';

  ?>


    <div class="container">
      <h1 style="text-align: center"> Benvenuto! <?php if (isset($_SESSION["username"])) {
    echo $_SESSION["username"];
} ?>
  </h1>
      <p>Hello, world!</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>



    <?php require 'footer.php'; ?>
