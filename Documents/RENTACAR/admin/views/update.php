<form name="form1" method="post" action="?odabir=update">
  <p>model 
    <select name="select" size="1">
 <?php foreach ($modeli as $m){?>
     <option <?php if($v->getVk_mod() == $m->getId() ) {echo'selected="selected"';}?>value="<?php echo $m->getId();?>"><?php echo $m->getNaziv();?></option>
  <?php }?>    </select>
</p>
	<input type="hidden" name="reg" value="<?php echo $v->getRegistracija();?>">
  <p>kilometraza:
    <input type="text" name="kil" value="<?php echo $v->getKilometraza();?>">
  </p>
  <p>ks: 
    <input type="text" name="ks" value="<?php echo $v->getKs();?>">
  </p>
  <p>vrata:
    <input type="text" name="bv" value="<?php echo $v->getVrata();?>">
  </p>
  <p>kategorija
    <select name="sel" value="<?php echo $v->getVk_kat();?>">
	 <?php foreach ($kategorije as $k){?>
    <option <?php if($v->getVk_kat() == $k->getId() ) {echo'selected="selected"';}?> value="<?php echo $k->getId();?>"><?php echo $k->getNaziv();?></option>
	<?php }?>
    </select>
</p>
  <p>gorivo: 
    <input type="text" name="g" value="<?php echo $v->getGorivo();?>">
</p>
  <p>
    <input type="submit" name="Submit" value="Update">
  </p>
</form>

