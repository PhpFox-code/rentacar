<?php foreach($kategorije as $k)
 {
 ?>
<p>
	<a href="?odabir=kategorija&id= <?php echo $k->getId();?> " ><?php echo $k->getNaziv();?></a>
</p>
<?php  } ?>