<?php
require_once('pomoc/Db.php');
require_once('pomoc/Pomoc.php');
require_once('controllers/KategorijaManager.php');
require_once('controllers/ProizvodjacManager.php');
require_once('controllers/ModelManager.php');
require_once('controllers/VoziloManager.php');
require_once('controllers/BookingManager.php');
require_once('models/Model.php');
require_once('models/Booking.php');
require_once('models/Korisnik.php');
require_once('models/Vozilo.php');
require_once('models/Kategorija.php');
require_once('models/Proizvodjac.php');

$kategorije=KategorijaManager::getKategorije();
$proizvodjaci=ProizvodjacManager::getProizvodjaci();
$modeli = ModelManager::getModeli();
$lTem='kategorija';
$rTem='proizvodjac';


if(!isset($_GET['odabir'])){
	$od = false; 
} 
else {
	$od = $_GET['odabir'];
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
}
$b= new Booking();
$k = new Korisnik;
switch($od){
	case 'kategorija':	$vozila=VoziloManager::getVkat($id);
						$mTem='vozilo';
						break;
	case 'proizvodjac': $vozila=VoziloManager::getPro($id);
						$mTem='vozilo';
						break;
	case 'vise':	
					$vozila=VoziloManager::getVozila($id);
					$mTem='vozilo';
					break;
	case 'rez':		$mTem='naruci';
					$b->setVoz($id);
					break;
	case 'nar':		
					$mTem='pregled';
					$k->setIme($_POST['ime']);
					$k->setPrez($_POST['prezime']);
					$k->setSpol($_POST['radiobutton']);
					$k->setMob($_POST['mob']);
					$k->setEm($_POST['em']);
					break;
	case 'sort':	Pomoc::sort($id);
					header('Location:index.php');
					break;
	case 'admin':	header('Location: admin/views/');
					break;
					
	
	default:	$mTem='pregled';
				break;
}

include_once 'views/index.php';



?>