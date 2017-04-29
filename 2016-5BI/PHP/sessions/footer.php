<div class="myfooter">
<?php

  if (isset($_SESSION['autenticazionedebole']) &&
    $_SESSION["autenticazionedebole"] === true) {

    echo "L'utente è autenticato";
  } else {
    echo "NON SEI NESSUNO";
  }
 ?>
 </div>
</body>
</html>
