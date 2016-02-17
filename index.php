<?php


	define("APP_INIT", TRUE);
	require_once ("protected/class/applicationClass.php");
	
	$app = new Application();
	
	//Punto di ingresso
	$app->run();