<?php
	// server, username, password, databasename
	$connection = new mysqli('localhost','root','','todolist');

	$wat = $_POST['wat'];
	$wanneer = $_POST['wanneer'];
	$hoe = $_POST['hoe'];

	$sql = "insert into gegevens (wat, wanneer, hoe) values('$wat', '$wanneer', '$hoe')";

	$connection->query($sql);
	header("location: /todolist/todolist2/todolist.php");
?>