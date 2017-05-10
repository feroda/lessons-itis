
<footer>
      pie di pagina divisa dal corpo della pagina ed inserito in un file apparte chiamato footer.php richiamato dalla funzione include
      <br>
      <?php
      if (!isset($_SESSION["username"]))
      {
        echo "non sei loggato <a href='login.php'>login</a>";

      }else {
        echo "l'utente loggato è <b>". $_SESSION["username"]."</b> <a href='logout.php'>esci</a> ";
      }


       ?>
</footer>
<b>
</body>
</html>
