<?php
require_once('../pomoc/Db.php');
$passwd = md5($_POST['passwd']);
$uname=$_POST['uname'];
$c=Db::connect();
$r=$c->query("select uname, pass from admin where uname='$uname' and pass='$passwd' limit 1");
if($r && $r->num_rows==1){
	session_start();
	$re=$r->fetch_assoc();
	$_SESSION['login']=$re['uname'];
	header("Location: admin.php");
}
else{
	header("Location: index.php");
}
?>