<?php
	//Connection
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "databasename");

	$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

	if(!$connect){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>