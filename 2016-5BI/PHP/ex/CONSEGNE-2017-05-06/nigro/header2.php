<title>Mi esercito <?php echo $title; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
<link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/examples/starter-template/starter-template.css">
<style type="text/css">
  .sfondo-verde {
    background-color: green;
    color: white;
    font-weight: bold;
  }
</style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <ul class="nav nav-pills">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</span></a>
    </li>
    <li class="nav-item">
        <?php
        if (isset($_SESSION["username"]))
        {
          echo '<a class="nav-link" href="logout.php">esci</a>';
        } else {
          echo '<a class="nav-link" href="login.php">Login</a>';
        }
         ?>

    </li>
    <li class="nav-item active">
      <a class="nav-link" href="input.php">Contact</span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="stampaDB.php">mostra commenti</span></a>
    </li>

  </ul>
</nav>
<div class="container">
  <p>ecco la pagina creata per l'esercitazione del 6 maggio 2017</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
