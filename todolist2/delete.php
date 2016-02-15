<?php
	// server, username, password, databasename
	$connection = new mysqli('localhost','root','','todolist');

	// prepare id from the url querystring to find record
	$id = $_GET['id'];

	// prepare delete instruction
	$sql = "DELETE FROM gegevens WHERE id = $id";

	// execute delete instruction
	$connection->query($sql);
	header("location: /todolist/todolist2/todolist.php");
?>