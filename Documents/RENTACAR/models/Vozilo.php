<?php
require_once("Model.php");
class Vozilo extends Model{
	private $registracija;
	private $kilometraza;
	private $ks;
	private $vrata;
	private $vk_kategorija;
	private $vk_model;
	private $gorivo;
	
	public function __construct($registracija = false){
	
		if($registracija){
			$c=Db::connect();
			$r=$c->query("select * from vozilo where registracija='{$registracija}' limit 1");
			$re = $r->fetch_assoc();
			$this->registracija=$registracija;
			$this->kilometraza=$re['kilometraza'];
			$this->ks=$re['ks'];
			$this->vrata=$re['vrata'];
			$this->vk_kategorija=$re['vk_kategorija'];
			$this->vk_model=$re['vk_model'];
			$this->gorivo=$re['gorivo'];
			parent::__construct($re['vk_model']);
		}
	}
	public function setRegistracija($reg){
		$this->registracija=$reg;
	}
	public function setKilometraza($kil){
		$this->kilometraza=$kil;
	}
	public function setKs($ks){
		$this->ks=$ks;
	}
	public function setVk_kat($vk_k){
		$this->vk_kategorija=$vk_k;
	}
	public function setVk_mod($vk_m){
		$this->vk_model=$vk_m;
	}
	
	public function getRegistracija(){
		return $this->registracija;
	}
	public function getKilometraza(){
		return $this->kilometraza;
	}
	public function getKs(){
		return $this->ks;
	}
	public function getVk_kat(){
		return $this->vk_kategorija;
	}
	public function getVk_mod(){
		return $this->vk_model;
	}
	
	public function getId(){
		return $this->id;
	}
	public function getNaziv(){
		return $this->naziv;
	}
	public function getOpis(){
		return $this->opis;
	}
	public function getCijena(){
		return $this->cijena;
	}
	public function getSlika(){
		return $this->slika;
	}
	public function getVrata(){
		return $this->vrata;
	}
	public function getGorivo(){
		return $this->gorivo;
	}
	public function getProizvodjac(){
		$c=Db::connect();
		$r=$c->query("select name from proizvodjac where id=$this->vk_proizvodjac limit 1");
		$re=$r->fetch_assoc();
		return $re['name'];
	}
}
?>
