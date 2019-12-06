<?php
	try {				
		$bdd_site = new PDO("mysql:host=localhost;dbname=nuitdelinfo", "root", "root38000");					
	} catch (Exception $error) {						
		print('Une erreur est survenue : ' . $error->getMessage());						
	}
?>