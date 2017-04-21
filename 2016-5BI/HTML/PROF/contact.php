<?php
  require "header.php";
?>

    <div class="container">

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

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
