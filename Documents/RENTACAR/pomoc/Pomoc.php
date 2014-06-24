<?php
class Pomoc{
	public static function sort($sort){
		if($_COOKIE['cij']!=$sort){
			 setcookie('cij', $sort, time()+360000);
		}
	}
	public static function logiran(){
		if(!isset ($_SESSION['login'])){header("Location: ../index.php");}
	}
}
?>
