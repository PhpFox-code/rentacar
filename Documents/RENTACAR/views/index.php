<!doctype html>
<html>
<head>
	<title>Index</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="<?php echo'http://localhost/dwa2/RENTACAR/';?>/css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="content">
		<div class="top_block HEADER">
			<div class="content">
				<h1>RENT-A-CAR</h1>
			</div>
		</div>
		<div class="top_block SORT">
			<div class="content">
			<p align="left"><a href="?odabir=admin">Admin</a></p>
			<p align="center">Sortiraj: <a href="?odabir=sort&id=jef">(Najjeftiniji)</a> - <a href="?odabir=sort&id=sku">(Najskuplji)</a></p>
			</div>
		</div>
		<div class="background KATEGORIJA">
		</div>
		<div class="left_block KATEGORIJA">
			<div class="content">
			<h2>KATEGORIJE</h2>
			<?php include("$lTem.php"); ?>
			</div>
		</div>
		<div class="background PROIZVODJAC">
		</div>
		<div class="right_block PROIZVODJAC">
			<div class="content">
			<h2>ODABERITE</h2>
			<?php include("$rTem.php"); ?>
			</div>
		</div>
		<div class="background MAIN">
		</div>
		<div class="center_block MAIN">
			<div class="content">
			<?php include("$mTem.php"); ?>
			</div>
		</div>
		<div class="bottom_block FOOTER">
			<div class="content">
			</div>
		</div>
	</div>

</body>
</html>

