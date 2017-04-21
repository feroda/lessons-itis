<?php
  require "header.php";
?>

      <h1>Form per i contatti</h1>
      <form action="pagepc.php" method="POST">
        <fieldset class="form-group">
          <label for="the-name">Name</label>
          <input type="text" class="form-control" id="the-name" name="ilnome" placeholder="Enter name">
        </fieldset>
        <fieldset class="form-group">
          <label for="the-email">Email address</label>
          <input type="email" class="form-control" id="the-email" name="lamail" placeholder="Enter email">
          <small class="text-muted">We'll never share your email with anyone else.</small>
        </fieldset>
        <fieldset class="form-group">
          <label for="campotextarea1">Comment</label>
          <textarea class="form-control" id="campotextarea1" rows="3" name="ilcommento" placeholder="Metti qui il tuo commento"></textarea>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div><!-- /.container -->

<?php
  require "footer.php";
?>
