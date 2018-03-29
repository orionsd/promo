<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/assets/libs/medoo/medoo.php');
	use Medoo\Medoo;
	 
	// Initialize
	$db = new Medoo([
	    'database_type' => 'mysql',
	    'database_name' => 'promo_04_2018',
	    'server' => 'localhost',
	    'username' => 'root',
	    'password' => 'ktybdsq,fnjy',

	    'charset' => 'utf8'
	]);


?>