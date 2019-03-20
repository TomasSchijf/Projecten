<?php
	$hostnaam = "localhost";
	$dbnaam = "dbportfolio";
	$gebruiker = "root";
	$wachtwoord = "";
	
	try{
		$conn = new PDO ("mysql:host=".$hostnaam."; dbname=".$dbnaam.";",$gebruiker, $wachtwoord);

	}catch(PDOException $ex){
	echo "verbinding mislukt";}
	
	
?>