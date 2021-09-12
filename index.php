<?php
	date_default_timezone_set('America/Sao_Paulo');
	session_start();
	require_once 'vendor/autoload.php';

	$app = new Aota\App();
	$app->run();
?>