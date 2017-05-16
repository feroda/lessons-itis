    </div>

    <footer class="centro">
        Sito realizzato da alunno, rilasciato in licenza CC-BY.<br />
        <?php if (isset($_SESSION["username"])) {
            echo "L'utente autenticato è <b>".$_SESSION["username"]."</b>";
        } // parentesi graffe opzionali poiché c'è solo una istruzione nell' "if"
        ?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
