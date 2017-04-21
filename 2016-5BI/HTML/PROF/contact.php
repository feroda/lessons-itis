<?php
  require "header.php";

  if (!empty($_POST)) {

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
          <input type="text" class="form-control" id="the-name" name="ilnome" placeholder="Enter name" required="required">
        </fieldset>
        <fieldset class="form-group">
          <label for="the-email">Email address</label>
          <input type="email" class="form-control" id="the-email" name="lamail" placeholder="Enter email" required="required">
          <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>
        <fieldset class="form-group">
          <label for="campotextarea1">Comment</label>
          <textarea class="form-control" id="campotextarea1" rows="3" name="ilcommento" placeholder="Metti qui il tuo commento" required="required"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div><!-- /.container -->

<?php
  }; // fine ramo else della pagina con $_POST vuoto
  require "footer.php";
?>
