<?php
class Db{
	const host = 'localhost';
	const user = 'dwa2';
	const pass = 'admin';
	const dbase = 'rentacar';
	
	public static function connect(){
		$c = new mysqli(self::host, self::user, self::pass, self::dbase);
		return $c;
	}

}
?>
