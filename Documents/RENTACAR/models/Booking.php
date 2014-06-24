<?php
class Booking{
	private $id;
	private $od;
	private $do;
	private $placeno;
	private $vk_korisnik;
	private $vk_vozilo;
	private $vk_status;
	
	public function setId($id){
		$this->id=$id;
	}
	public function setOd($od){
		$this->od=$od;
	}
	public function setDo($do){
		$this->do=$do;
	}
	public function setPlaceno($placeno){
		$this->placeno=$placeno;
	}
	public function setKor($kor){
		$this->vk_korisnik=$kor;
	}
	public function setVoz($voz){
		$this->vk_vozilo=$voz;
	}
	public function setSta($sta){
		$this->vk_status=$sta;
	}
	public function spremi(){
		$c=Db::connect();
		$upit="INSERT INTO `booking`(`id`, `od`, `do`, `placeno`, `vk_korisnik`, `vk_vozilo`, `vk_status`) 
		VALUES (NULL,$this->od,$this->do,$this->placeno,$this->vk_korisnik,$this->vk_vozilo,$this->vk_status)";
		$c->query($upit);
	}

}
?>