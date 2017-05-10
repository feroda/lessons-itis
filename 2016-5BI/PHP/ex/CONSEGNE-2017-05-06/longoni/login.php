<?php
include("header1.php");
include("header2.php");

echo "Questa è la pagina di login";

if(isset($_SESSION["username"]) && $_SESSION["username"]!=="")
{
  $error="<div class='rosso'>Utente già loggato!</div>";
}
else
{
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user=$_POST["username"];
    $password=$_POST["password"];
    if(($user=="simone")&&($password=="longoni"))
    {
      $_SESSION["username"]=$user;
      header("Location: index.php");
      exit();
    }
    else{
      $error="Utente o password errati!";
      $_SESSION["username"]="";
    }
}
?>

<form name="login" method="POST" action="">
 <p align='left'>
 UTENTE<br>
 <input type='text' name='username'  value="" maxlength="30">
 <br>PASSWORD<BR>
 <input type='password' name='password'  value="" maxlength="15">
 <br>
 <input type="Submit" name="invia" value="LOGIN">
 </p>
</form>

<?php
  include("footer.php");
?>
