<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','library');

	// prepare id and values to be updated in table books in database
	$id = $_POST['id'];
	$author = $_POST['author'];
	$title = $_POST['title'];
	
	// prepare update instruction
	$sql = "UPDATE books SET title = '$title', author = '$author' WHERE id = $id";
	
	// execute update instruction
	$connection->query($sql);
?>