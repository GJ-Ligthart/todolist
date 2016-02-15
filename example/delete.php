<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','library');

	// prepare id from the url querystring to find the record
	$id = $_GET['id'];
	
	// prepare delete instruction
	$sql = "DELETE FROM books WHERE id = $id";
	
	// execute delete instruction
	$connection->query($sql);
?>