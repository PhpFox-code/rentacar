<?php
require_once("../pomoc/Pomoc.php");
require_once('../pomoc/Db.php');
require_once("../controllers/VoziloManager.php");
require_once("../controllers/ModelManager.php");
require_once("../controllers/KategorijaManager.php");
require_once("../models/Kategorija.php");
require_once("../models/Vozilo.php");
require_once("../models/Model.php");
include"views/odjava.php";

session_start();
Pomoc::logiran();
$odabir=false;
$u=new VoziloManager();
$kategorije=KategorijaManager::getKategorije();
$modeli=ModelManager::getModeli();
if($_GET){
	$odabir=$_GET['odabir'];
}
switch($odabir){
	case 'uredi':  
					$reg=$_GET['id'];
					$v= new Vozilo($reg);
					include_once"views/update.php";
					
					
	break;
	
	case 'obrisi':  $id=$_GET['id'];
					$u->obrisi($id);
					header("Location: admin.php");
					
					include_once"views/brisi.php";
	break;
	case 'unos':    
					include_once"views/unos.php";
					if($_POST){
						$model=$_POST['select'];
						$kategorija=$_POST['sel'];
						$reg=$_POST['reg'];
						$kil=$_POST['kil'];
						$ks=$_POST['ks'];
						$bv=$_POST['bv'];
						$g=$_POST['g'];
						$u->unesi($reg, $kil, $ks,$bv, $kategorija, $model, $g);
						header("Location: admin.php");
					}
	break;
	
	case 'update':	
					if($_POST){
						$reg=$_POST['reg'];
						$model=$_POST['select'];
						$kategorija=$_POST['sel'];
						$kil=$_POST['kil'];
						$ks=$_POST['ks'];
						$bv=$_POST['bv'];
						$g=$_POST['g'];
						$u->update($reg, $kil, $ks, $bv, $kategorija, $model, $g);
						header("Location: admin.php");
					}
	break;
	
	default: $vozila=VoziloManager::getVozila();
			include_once"views/vz.php";
	break;
}




?>
