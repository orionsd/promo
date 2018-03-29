<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/constants.php');
require_once(BASEDIR . 'db.php');
require_once(BASEDIR . 'functions.php');

	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	extract($post);
	unset($post['action']);

	switch ( $action )
	{
		case 'registration':
			$result = saveRegistration($post, $db);
			break;

		case 'reg_adm':
			$result = regAdm($post, $db);
			break;
		
		default:
			$result = "No";
			break;
	}

	echo json_encode($result);

?>