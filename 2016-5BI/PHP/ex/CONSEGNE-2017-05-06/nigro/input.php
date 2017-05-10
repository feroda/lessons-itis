<?php
require'header1.php';
$title="input";
require'header2.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if(!isset($_POST["username"])||!isset($_POST["password"])||!isset($_POST["commento"]))
  {
    $_SESSION["errore_input"]="mancano i parametri";

  }else {
    $errusername="";
    $errname="";
    $errcommento="";
    $surname=$_POST["username"];
    $name=$_POST["name"];
    $comment=$_POST["commento"];

    if(strlen($surname)<=3)
    {
      $errusername="surname deve essere almeno 3 caratteri ";
      $surname="";
    }elseif (strlen($name)<=3) {
      $errname="name deve essere almeno 3 caratteri ";
      $name="";
    }elseif (strlen($comment)<=3) {
      $errcommento="commento deve avere più di tre lettere";
      $comment="";
    }else {
      require(list.php);
    }

  }
}


?>
<form name="login" action="input.php" method="post">
   Utente 	<input name="surname" type="text" value="<?php echo $surname; ?>"><?php echo $errusername; ?>
<br>
<p>Password<input name="name" type="text" value="<?php echo $name; ?>" size="20"><?php echo $errname; ?> </p>
<p>commento<textarea name="commento" value="<?php echo $comment; ?>" cols="30" rows="10"></textarea><?php echo $errcommento; ?></p>
<button type="submit">Conferma</button>
</form>
<?php
   include("footer.php");



?>
