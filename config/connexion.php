<?php

try {

	/* Create connexion to data base "esam" specify type (mysql), host (siteweb name), encoding type and user (root) and passe word ("") */
		$access=new pdo("mysql:host=localhost;dbname=esam;charset=utf8", "root", "");
	
	/* 	Error message */
		$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
    
    


?>