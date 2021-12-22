<?php 
	//Desactivem els warnings
	ini_set('display_errors', 0);
	error_reporting(E_ERROR | E_WARNING | E_PARSE); 
	//Agafem la acció
	$accio = $_GET['accio'];

	switch ($accio) {
		case 'login':
			include __DIR__.'/controllers/login.php';
			break;
		default:
			include __DIR__.'/controllers/portada.php';
			break;
	}
;?>