<?php
  include("header1.php");
  include("header2.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome=$_POST["nome"];
    $cognome=$_POST["cognome"];
    $colorePreferito=$_POST["colorePreferito"];
  }
?>

<form name="contact" method="POST" action="">
 <p align='center'>
 NOME<br>
 <input type='text' name='nome'  value="" maxlength="20"><br>
 COGNOME<BR>
 <input type='text' name='cognome'  value="" maxlength="20"><br>
 COLORE PREFERITO<BR>
 <input typr='text' name="colorePreferito" maxlength="10">
 <br>
 <input type="Submit" name="invia" value="INVIA">
 </p>
</form>

<?php
  include("footer.php");
?>
