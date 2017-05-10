<?php
session_start();
require 'header-1.php';
$title.="Input";
require 'header-2.php';
require 'login_data.php';





if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["name"])||strlen($_POST["name"])<3) {
    header("Location: input.php");
    exit;
  }
  $_SESSION["input"] = array();
  array_push($_SESSION["input"], array("name" => $_POST["name"],
                                        "surname" => $_POST["surname"],
                                         "comment" => $_POST["comment"]));
  header("Location: list.php");
  exit;
}


?>
    <div class="container">
      <form action="" method="post">
        <fieldset class="form-group">
          <label for="textBoxName">Name</label>
          <input type="text" class="form-control" id="textBoxName" name="name" placeholder="e.g. Luca">
        </fieldset>
        <fieldset class="form-group">
          <label for="textBoxSurname">Surname</label>
          <input type="text" class="form-control" id="textBoxSurname"name="surname"placeholder="e.g. Ferroni">
        </fieldset>
        <fieldset class="form-group">
          <label for="textBoxComment">Comment</label>
          <textarea class="form-control" id="textBoxComment" name="comment"> </textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary"> Submit </button>
      </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

    <?php require 'footer.php'; ?>
