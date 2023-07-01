<?php 
/****************************************************************/



	$dns     = 'mysql:host=localhost;dbname=spesuscc_forms';
	$userdb  = 'root';
	$passdb  = '';
	$option  = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );


	try {
		$con = new PDO($dns , $userdb , $passdb , $option );
		$con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOEception $e ) {
		echo "databace problem" . $e->getMassage();
	}

?>