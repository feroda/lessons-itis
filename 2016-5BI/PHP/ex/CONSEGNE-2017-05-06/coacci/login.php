<?php
  include("headerA.php");
  echo "Login</title>";
  include("headerB.php");
  if(isset($_SESSION["username"]) && $_SESSION["username"]!==""){
    $error="<div class='rosso'>Utente già loggato!</div>";
  }
  else{
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $user=$_POST["username"];
      $password=$_POST["password"];
      if(($user=="user")&&($password=="root")){
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
echo "<p align='center'><u>PER ACCEDERE UTILIZZA UTENTE:user PASSWORD:root</u></p><br>";

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
