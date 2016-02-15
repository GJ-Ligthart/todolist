<?php
	// server, username, password, databasename
	$connection = new mysqli('localhost','root','','todolist');

	// prepare id and values to be updated in table gegevens in DB
	$id = $_POST['id'];
	$wat = $_POST['wat'];
	$wanneer = $_POST['wanneer'];
	$hoe = $_POST['hoe'];

	// prepare update instruction
	$sql = "UPDATE gegevens SET wat = '$wat', wanneer = '$wanneer', hoe = '$hoe' WHERE id = $id";

	// execute update instruction
	$connection->query($sql);
	header("location: /todolist/todolist2/todolist.php");
?>