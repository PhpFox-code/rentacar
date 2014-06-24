<?php
class VoziloManager{
	
	public static function getVozila($model=false){
		$vozila=array();
		$c=Db::connect();
		if($model){
			$r=$c->query("select * from vozilo where vk_model=$model");
			while($re=$r->fetch_assoc()){
				$reg=$re['registracija'];
				$v = new Vozilo($reg);
				$vozila[]=$v;
			}
			
			
		}
		else{
			$r=$c->query("select * from vozilo");
			while($re=$r->fetch_assoc()){
				$reg=$re['registracija'];
				$v = new Vozilo($reg);
				$vozila[]=$v;
			}
		}
		return $vozila;
	}
		public static function getVkat($kat=false){
		$vozila=array();
		$c=Db::connect();
		if($kat){
			$r=$c->query("select * from vozilo where vk_kategorija=$kat");
			while($re=$r->fetch_assoc()){
				$reg=$re['registracija'];
				$v = new Vozilo($reg);
				$vozila[]=$v;
			}
			
			return $vozila;
		}
		
		
	}
	public static function getPro($pro=false){
		$vozila=array();
		$c=Db::connect();
		if($pro){
			$r=$c->query("select model.vk_proizvodjac, model.id, vozilo.vk_model, vozilo.registracija from model, vozilo 
			where $pro=model.vk_proizvodjac and model.id=vozilo.vk_model");
			while($re=$r->fetch_assoc()){
				$reg=$re['registracija'];
				$v = new Vozilo($reg);
				$vozila[]=$v;
			}
			
			return $vozila;
		}
		
		
	}
	public function obrisi($reg){
		$c=Db::connect();
		$c->query("delete from vozilo where registracija='$reg' limit 1");
	}
	public function unesi($reg, $kil, $ks, $vr, $kat, $mod, $g){
		$c=Db::connect();
		$upit="INSERT INTO `vozilo`(`registracija`, `kilometraza`, `ks`, `vrata`, `vk_kategorija`, `vk_model`, `gorivo`) VALUES ('$reg',$kil, $ks, $vr, $kat, $mod, '$g')";
		$c->query($upit);
	}
	public function update($reg, $kil, $ks, $vr, $kat, $mod, $g){
		$c=Db::connect();
		$upit="UPDATE `vozilo` SET `kilometraza`=$kil,`ks`=$ks,`vrata`=$vr,`vk_kategorija`=$kat,`vk_model`=$mod,`gorivo`='$g' WHERE registracija='$reg' limit 1";
		$c->query($upit);
	}
	
}
?>
