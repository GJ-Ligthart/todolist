<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','library');
	
	// prepare query to select all data from the table books
	$sql = "SELECT * FROM todolist";
	
	// execute the query 
	$result = $connection->query($sql);
	
	// fetch all selected books to store in variable: booksList
	$booksList = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html>
	<body>
		<table>
	<?php 
		// repeat for each book in booksList
		foreach($todolist as $todo){
	?>
		<tr>
			<td><?php echo $todo['id']; ?></td>
			<td><?php echo $todo['wat']; ?></td>
			<td><?php echo $todo['wanneer']; ?></td>
			<td><?php echo $todo['hoe']; ?></td>
		</tr>
	<?php																			
		} // end foreach
	?>
		</table>
	</body>
</html>