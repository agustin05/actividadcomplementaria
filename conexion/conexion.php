<?php 

	$con = 'mysql:dbname=universidaad;host=localhost';
	$user = 'Agustin';
	$password = 'guty321';

	try {
		$pdo = new PDO($con,$user,$password);
	} catch (Exception $e) {
		echo 'Error al conectarnos' .$e->getMessage();
	}
	
 ?>
