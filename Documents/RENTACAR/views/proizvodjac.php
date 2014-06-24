<?php foreach ($proizvodjaci as $p){

 ?>

<p>
	<a href="?odabir=proizvodjac&id= <?php echo $p->getId();?> " ><?php echo $p->getName();?></a>
</p>
<?php  } ?>