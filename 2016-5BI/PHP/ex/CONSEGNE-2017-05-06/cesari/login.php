<?php
  include("header-1.php");
  echo "Login</title>";
  include("header-2.php");
  if(isset($_SESSION["username"]) && $_SESSION["username"]!==""){
    $error="<div class='rosso'>Utente già loggato!</div>";
  }
  else{
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $user=$_POST["username"];
      $password=$_POST["password"];
      if(($user=="tizio")&&($password=="caglio")){
        $_SESSION["username"]=$user;
        header("Location: index.php");
        exit();
      }
      else{
        $error="Utente o password errati!";
        $_SESSION["username"]="";
      }
  }


}
echo "<p align='center'><u>Puoi accedere con tizio:caglio</u></p><br>";

 ?>
 <form name="login" method="POST" action="">
  <p align='center'>
 	UTENTE<br>
  <input type='text' name='username'  value="" maxlength="20">
 	<br>PASSWORD<BR>
  <input type='password' name='password'  value="" maxlength="20">
  <br>
 	<input type="Submit" name="invia" value="ACCEDI">
</p>
 </form>

<?php

  if(isset($error))
    {
      echo "<h2 align='center' class='rosso'>".$error."</h2>";
    }
    include("footer.php");
?>
