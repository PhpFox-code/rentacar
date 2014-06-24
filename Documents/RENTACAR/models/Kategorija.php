<?php
class Kategorija{
	private $id;
	private $naziv;
	
	public function __construct($id=false){
		if($id){
			$c = Db::connect;
			$upit = "select * from kategorija where id=$id limit 1";
			$r = $c->query($upit);
			$re = $r->fetch_assoc();
			$this->id=$re['id'];
			$this->naziv=$re['naziv'];
			
		}
	}
	public function getId(){
		return $this->id;
	}
	public function getNaziv(){
		return $this->naziv;
	}
	public function setId($id){
		$this->id=$id;
	}
	public function setNaziv($naziv){
		$this->naziv=$naziv;
	}
}
?>