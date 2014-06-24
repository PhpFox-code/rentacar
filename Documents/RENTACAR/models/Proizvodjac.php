<?php
class Proizvodjac{
	private $id;
	private $name;
	
	
	public function __construct($id = false){
	
		if($id){
			$c=Db::connect();
			$r=$c->query("select * from proizvodjac");
			$re = $r->fetch_assoc();
			$this->id=$id;
			$this->name=$re['name'];
			
		}
	}
	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function setId($id){
		$this->id=$id;
	}
	public function setName($name){
		$this->name=$name;
	}
}
?>
