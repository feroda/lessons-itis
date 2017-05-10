<?php
  include("header-1.php");
  echo "Contact</title>";
  include("header-2.php");
  $error="";
  $nomi=array();
  $cognomi=array();
  $commenti=array();
  if(!isset($_SESSION["cont"])){
    $_SESSION["cont"]=0;  //indice commenti
  }
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if((strlen($_POST["nome"])<3)){
        $error="Lunghezza minima nome: 3 caratteri";
      }
      else {
        $_SESSION["cont"]+=1;
        $nomi[$_SESSION["cont"]]=$_POST["nome"];
        $cognomi[$_SESSION["cont"]]=$_POST["cognome"];
        $commenti[$_SESSION["cont"]]=$_POST["commento"];


        $_SESSION["names"][$_SESSION["cont"]]=$nomi[$_SESSION["cont"]];
        $_SESSION["surnames"][$_SESSION["cont"]]=$cognomi[$_SESSION["cont"]];
        $_SESSION["comments"][$_SESSION["cont"]]=$commenti[$_SESSION["cont"]];
      }
  }
//  echo $_SESSION["names"][$_SESSION["cont"]];
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
 	<input type="Submit" name="invia" value="INVIA">
</p>
 </form>

<?php
    if($error!=="") {
      echo "<br><br><h3 class='rosso' align='center'>".$error."</h3>";

    }
    include("footer.php");
?>
