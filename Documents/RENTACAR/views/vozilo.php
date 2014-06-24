<table width="100%" align="center" border="0">
  <tr>
    <th width="240" height="48" scope="col">&nbsp;</th>
    <th width="272" scope="col">&nbsp;</th>
    <th width="293" scope="col">cijena</th>
  </tr>
<?php foreach ($vozila as $v){

 ?>
 <tr>
    <td rowspan="2" height="97">
	<img align="texttop" height="140" width="215" src="<?php echo'http://localhost/dwa2/RENTACAR', $v->getSlika();?>">
	</td>
    <td><?php echo " ",  $v->getProizvodjac(), " ", $v->getNaziv();?></td>
    <td align="center"><?php echo $v->getCijena();?> €/dan</td>
  </tr>
  <tr>
  <td><?php echo $v->getOpis()?></td>
  <td align="center">	Ks: <?php echo $v->getKs();?>
  	<br>Kilometraza:<?php echo $v->getKilometraza();?>
	<br>Broj vrata:<?php echo $v->getVrata();?>
	<br>Gorivo:<?php echo $v->getGorivo();?>
  </td>
  </tr>
   <tr>
  <td><a href="?odabir=rez&id=<?php $v->getRegistracija();?>">REZERVIRAJ</a></td>
  <td align="center"><a href="?odabir=">POVRATAK</a>
  </td>
  </tr>
  <br>
  



<?php  } ?>
</table>