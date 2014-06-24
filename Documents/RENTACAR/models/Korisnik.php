<?php
class Korisnik{
	private $id;
	private $ime;
	private $prez;
	private $spol;
	private $mob;
	private $em;
	
	public function setId($id){
		$this->id=$id;
	}
	public function setIme($ime){
		$this->ime=$ime;
	}
	public function setPrez($prez){
		$this->prez=$prez;
	}
	public function setSpol($spol){
		$this->spol=$spol;
	}
	public function setMob($mob){
		$this->mob=$mob;
	}
	public function setEm($em){
		$this->em=$em;
	}
	public function spremi(){
		$c=Db::connect();
		$upit='INSERT INTO `korisnik`VALUES (NULL, "$this->ime", $this->prez, $this->spol, $this->mob, "$this->em")';
		$c->query($upit);
	}
	public function show(){
		echo"<br> ...", $this->ime;
		echo"<br> ...", $this->prez;
		echo"<br> ...", $this->spol;
		echo"<br> ...", $this->mob;
		echo"<br> ...", $this->em;
	}
}
?>
