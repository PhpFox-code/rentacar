<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php echo"<script type='text/javascript' src='http://localhost/dwa2/RENTACAR/js/calendarDateInput.js'>

/***********************************************
* Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm
* Script featured on and available at http://www.dynamicdrive.com
* Keep this notice intact for use.
***********************************************/

</script>";?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<body>
<form name="form1" method="post" action="?odabir=nar" id="myf">
  <p>Ime:
    <input type="text" name="ime">
  </p>
  <p>Prezime:
    <input type="text" name="prezime">
  </p>
  <p>Spol:
    M
    <input name="radiobutton" type="radio" value=0>
Z
<input name="radiobutton" type="radio" value=1>
</p>
  <p>Mobitel:
    <input type="text" name="mob">
  </p>
  <p>Email:
    <input type="text" name="em">
  </p>
  
  <p>od:
	<?php echo"<script>DateInput('orderdate', true, 'YYYY-MM-DD')</script>";?>
	</p>
	

	<p>
  <input type="submit" name="Submit" value="Nastavi"> 
  	</p>
	

</form>
</body>
</html>
