<?php
class ProizvodjacManager{
	private $proizvodjaci = array();
	
	public static function getProizvodjaci(){
		$c=Db::connect();
		$r=$c->query("select * from proizvodjac");
		while($re = $r->fetch_assoc()){
			$pr= new Proizvodjac();
			$pr->setId($re['id']);
			$pr->setName($re['name']);
			$proizvodjaci[]=$pr;
			
		}
		return $proizvodjaci;
	}
}
?>
