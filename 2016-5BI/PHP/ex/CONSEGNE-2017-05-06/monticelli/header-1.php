<?php
$account_link = '<a class="nav-link"';
if (isset($_SESSION["username"]))
  $account_link.='href="logout.php"> Logout </a>';
else
  $account_link.='href="login.php"> Login </a>';

$title = "Mi esercito - ";
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
          <?php echo $account_link; ?>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="input.php">Input</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="list.php">List</a>
        </li>
      </ul>
    </nav>
