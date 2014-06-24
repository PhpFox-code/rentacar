<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php foreach ($vozila as $v){?>
<p>
<?php echo $v->getRegistracija(), ' ', $v->getProizvodjac(), ' ',
			$v->getNaziv(); ?>
			<a href="?odabir=uredi&id=<?php echo $v->getRegistracija();?>">Uredi</a>&nbsp;<a href="?odabir=obrisi&id=<?php echo $v->getRegistracija();?>">Obrisi</a>
</p>

<?php } ?>
<a href="?odabir=unos">Unos novog vozila</a>
</body>
</html>
