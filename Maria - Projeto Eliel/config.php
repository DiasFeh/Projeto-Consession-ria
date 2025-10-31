<?php
	//nome do arquivo config.php
	
	define('HOST', 	'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'concessionaria1');

	$conn = new MySQLi(HOST,USER,PASS,BASE);