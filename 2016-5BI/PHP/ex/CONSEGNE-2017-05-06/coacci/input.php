<?php
  include("headerA.php");
  echo "Contact</title>";
  include("headerB.php");
  $error="";
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome=$_POST["nome"];
    $cognome=$_POST["cognome"];
    $commento=$_POST["commento"];
    if((strlen($nome)<3)){
        $error="Lunghezza minima nome utente: 5 caratteri";
      }
  }
?>

 <form name="contact" method="POST" action="">
  <p align='center'>
 	NOME<br>
  <input type='text' name='nome'  value="" maxlength="20">
 	<br>COGNOME<BR>
  <input type='text' name='cognome'  value="" maxlength="20">
  <br>COMMENTO<BR>
  <textarea rows="4" cols="40" name="commento"></textarea>
  <br><br>
 	<input type="Submit" name="Registra" value="Registrati">
</p>
 </form>

<?php
    if($error!=="") {
      echo "<br><br><h3 class='rosso' align='center'>".$error."</h3>";

    }
    include("footer.php");
?>
