<?php
class ModelManager{
	private $modeli=array();
	
	public static function getModeli(){
		$c=Db::connect();
		$upit="select id from model";
		if(isset($_COOKIE['cij'])){
			if($_COOKIE['cij']=="jef"){
				$upit.=" order by cijena asc";
			}
			if($_COOKIE['cij']=="sku"){
				$upit.=" order by cijena desc";
			}
		}
		
		$r=$c->query($upit);
		while($re = $r->fetch_assoc()){
			$i=$re['id'];
			$m = new Model($i);
			$modeli[]=$m;
		}
		return $modeli;
	}
	
}
?>