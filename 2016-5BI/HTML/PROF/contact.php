<?php
require "header.php";

function mydebug($v) {
    echo "<pre>";
    print_r($v);
    echo "</pre>";
}

function sanitize_mydata($data) {

    $errors = array("_has_errors" => false);
    //At first check if each field has the first character capitalized
    //ucfirst returns the string capitalized
    foreach($data as $key => $value) {
        $errors[$key] = array();
        if (ucfirst($value) != $value) {
            array_push($errors[$key], "It should be capitalized");
            $errors["_has_errors"] = true;
        }
    };

    //then check that comment starts with 'Io penso che'
    $pos = strpos($data["ilcommento"], 'Io penso che');
    if ($pos !== 0) {
        array_push($errors["ilcommento"], "Il commento deve iniziare con 'Io penso che'");
        $errors["_has_errors"] = true;
    };

    // mydebug($errors);
    return $errors;
}

if (!empty($_POST)) {
    $errors = sanitize_mydata($_POST);
};

if ($errors["_has_errors"] === false) {

        $nome=$_POST["ilnome"];
        $commento=$_POST["ilcommento"];

        echo "<p>";
        echo nl2br("Ciao ".$nome."\n");
        echo nl2br("Il tuo commento è stato ricevuto:\n");
        echo $commento;
        echo "</p>";
        echo '<p>Grazie per avermi contattato, ora <a href="index.php">torna alla home</a>!</p>';
} else {
?>

      <h1>Form per i contatti</h1>
      <form method="POST">
        <fieldset class="form-group">
          <label for="the-name">Name</label>
          <?php foreach ($errors["ilnome"] as $errmsg) { echo '<small class="text-muted rosso">'.$errmsg.'</small><br />'; }; ?>
          <input type="text" class="form-control" id="the-name" name="ilnome" placeholder="Enter name" required="required">
        </fieldset>
        <fieldset class="form-group">
          <label for="the-email">Email address</label>
          <input type="email" class="form-control" id="the-email" name="lamail" placeholder="Enter email" required="required">
          <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>
        <fieldset class="form-group">
          <label for="campotextarea1">Comment</label>
          <?php foreach ($errors["ilcommento"] as $errmsg) { echo '<small class="text-muted rosso">'.$errmsg.'</small><br />'; }; ?>
          <textarea class="form-control" id="campotextarea1" rows="3" name="ilcommento" placeholder="Metti qui il tuo commento iniziando con 'Io penso che'" required="required"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div><!-- /.container -->

<?php
}; // fine ramo else della pagina con $_POST vuoto
require "footer.php";
?>
