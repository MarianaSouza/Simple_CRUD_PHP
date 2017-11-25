<?php
//It makes the connection with the database. server(localhost), username(root), password, database.
$connection = mysqli_connect('localhost' ,'root', 'usbw', 'loginapp');

	if(!$connection){
		die("Database is not connected");
	}

?>