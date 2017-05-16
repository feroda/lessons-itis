    <title>Mi esercito - <?php echo $title; ?> </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/examples/starter-template/starter-template.css">
    <style type="text/css">
      .sfondo-verde {
        background-color: green;
        color: white;
        font-weight: bold;
      }
      .centro {
        text-align: center;
      }
      .mio-input {
        padding: 0.5em;
        margin: 0.5em 0px;
      }
    </style>
  </head>
  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <ul class="nav nav-pills">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</span></a>
        </li>
        <?php if(isset($_SESSION["username"]) && $_SESSION["username"]!==""){
            // è necessario che l'utente sia autenticato per poter gestire i commenti inseriti
            // nella sua sessione
        ?>
        <li class="nav-item">
            <a class="nav-link" href="input.php">Inserisci commenti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">Visualizza commenti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Esci</a>
        </li>
        <?php }else{  ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Entra</a>
        </li>
        <?php } ?>

      </ul>
    </nav>
    <div class="container">

