
<form name="form1" method="post" action="?odabir=unos">
  <p>Odaberi model:</p>
  <select name="select" size="1">
  
  <?php foreach ($modeli as $m){?>
    <option value="<?php echo $m->getId();?>"><?php echo $m->getNaziv();?></option>
  <?php }?>
  </select>
  <p>Odaberi kategoriju vozila:</p>
   <select name="sel">
    <?php foreach ($kategorije as $k){?>
    <option value="<?php echo $k->getId();?>"><?php echo $k->getNaziv();?></option>
	<?php }?>
  </select>
  
  
  <p>Registracija:
  <input type="text" name="reg">
</p>
<p>Kilometraza:
  <input type="text" name="kil">
</p>
<p>Ks: 
  <input type="text" name="ks">
</p>
<p>Broj vrata: 
  <input type="text" name="bv">
</p>
<p>Gorivo: 
  <input type="text" name="g">
</p>
<input type="submit" name="submit" value="submit">
  
</form>



