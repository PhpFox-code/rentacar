<?php
session_start();
if(!isset($_SESSION['login')){header("Location: index.php");}
require_once('../pomoc/Db.php');
if($_POST){
$pass=md5($_POST['pass']);
$c=Db::connect();
$c->query("UPDATE `admin` SET `pass`='$pass' WHERE id=1");
echo'<br>Lozinka promjenjena';
}
else{
echo'
<p>Promjena lozinke:</p>
<form name="form1" method="post" action="">
  <p>enter pass:
    <input type="text" name="pass"> 
  </p>
  <p>
    <input type="submit" name="Submit" value="Submit">
</p>
</form>';
}

?>
