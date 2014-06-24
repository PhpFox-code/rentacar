<?php
class Model{
	protected $id;
	protected $naziv;
	protected $opis;
	protected $cijena;
	protected $slika;
	protected $vk_proizvodjac;
	
	public function __construct($id=false){
		if($id){
			$this->id=$id;
			$c=Db::connect();
			$r=$c->query("select * from model where id=$id limit 1");
			$re = $r->fetch_assoc();
			$this->naziv=$re['naziv'];
			$this->opis=$re['opis'];
			$this->cijena=$re['cijena'];
			$this->slika=$re['slika'];
			$this->vk_proizvodjac=$re['vk_proizvodjac'];
		}
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
	public function getProizvodjac(){
		$c=Db::connect();
		$r=$c->query("select name from proizvodjac where id=$this->vk_proizvodjac limit 1");
		$re=$r->fetch_assoc();
		return $re['name'];
	}
}
?>
