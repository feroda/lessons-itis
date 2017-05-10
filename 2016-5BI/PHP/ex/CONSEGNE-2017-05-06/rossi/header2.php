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
      if(isset($_SESSION["username"]))
      {
        <a class="nav-link" href="logout.php">Logout</a>
      } else {
        <a class="nav-link" href="login.php">Login</a>
      }
       ?>

    <li class="nav-item">
        <a class="nav-link" href="input.php">Contact</a>
    </li>

  </ul>
</nav>
