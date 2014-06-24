<?php

class KategorijaManager {

	private $kategorije=array();
	
	public static function getKategorije(){
		$c=Db::connect();
		$upit = "select * from kategorija";
		$r = $c->query($upit);
		while($re = $r->fetch_assoc())
		{
			$kat = new Kategorija();
			$kat->setId($re['id']);
			$kat->setNaziv($re['naziv']);
			$kategorije[] = $kat;
		}
		
		return $kategorije;
	}
}

?>