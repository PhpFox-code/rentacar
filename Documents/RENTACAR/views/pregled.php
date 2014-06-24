<table width="100%" align="center" border="0">
  <tr>
    <th width="240" height="48" scope="col">&nbsp;</th>
    <th width="272" scope="col">&nbsp;</th>
    <th width="293" scope="col">cijena</th>
  </tr>
  <?php foreach($modeli as $m)
 {
 ?>
  <tr>
    <td rowspan="2" height="97">
	<img align="texttop" height="140" width="215" src="<?php echo'http://localhost/dwa2/RENTACAR', $m->getSlika();?>">
	</td>
    <td><?php echo " ",  $m->getProizvodjac(), " ", $m->getNaziv();?></td>
    <td align="center"><?php echo $m->getCijena();?> €/dan</td>
  </tr>
  <tr>
  <td><a href="?odabir=vise&id=<?php echo $m->getId();?> ">vise o vozilu</a></td><td></td>
  </tr>
  



<?php  } ?>
</table>