<?php
	try {				
		$bdd_site = new PDO("mysql:host=51.83.253.234;dbname=nuitdelinfo", "root", "root38000");					
	} catch (Exception $error) {						
		print('Une erreur est survenue : ' . $error->getMessage());						
	}
?>