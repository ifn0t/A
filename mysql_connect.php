<?php 
	$mysqli = new mysqli("sulley.cah.ucf.edu","ja272083","8JFP/4eHT&VvUL","ja272083");
	if($mysqli->error) {
		print "Error connecting! Message: ".$mysqli->error;
	}

	//Set UTF8 Encoding
	$charset = 'utf8';
	mysqli_set_charset($mysqli,$charset);
?>
