<?php
session_start();
require 'header-1.php';
$title.="Login";
require 'header-2.php';
require 'login_data.php';





if(isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(($_POST["user"] == $username)&&($_POST["pw"] == $password)) {
    $_SESSION["username"] = $username;
    header("Location: index.php");
    exit;
  }
}


?>
    <div class="container">
      <form action="" method="post">
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control"  name="user" placeholder="e.g. admin">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2">Password</label>
          <input type="password" class="form-control" name="pw"placeholder="e.g. password">
        </fieldset>
        <button type="submit" class="btn btn-primary"> Login </button>
      </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

    <?php require 'footer.php'; ?>
