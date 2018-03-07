<?php
	//Constantes
	$configs = new HXPHP\System\Configs\Config;

	$configs->env->add('development');

	$configs->env->development->baseURI = '/sistema/';

	$configs->env->development->database->setConnectionData(array(
		'host' => 'localhost',
		'user' => 'root',
		'password' => 'brunodaniel53520',
		'dbname' => 'sistemahxb'
	));

        $configs->env->development->auth->setURLs('/sistema/home/', '/sistema/login/');
        
	return $configs;
