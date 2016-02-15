<?php
 	// server, username, password, databasename
	$connection= new mysqli('localhost','root','','todolist');

	// prepare id from the url querystring to find record
	$id = $_GET['id'];

	// prepare query to select from the table gegevens for id
	$sql = "SELECT * FROM gegevens WHERE id = $id";

	// execute the query
	$result = $connection->query($sql);

	// fetch selected gegevens to store in variable: gegevens
	$todo = $result->fetch_assoc();
?>

<!doctype html>
<html>
	<body>
		<form action="update.php" method="post">
			<!-- inject gegevens id in hidden field -->
			<input type="hidden" name="id" value="<?php echo $todo['id']; ?>"><br>
			  
			<label for="wat">Wat:</label><br>
			<input name="wat" value="<?php echo $todo['wat']; ?>"><br>
			  
			<label for="wanneer">Wanneer:</label><br>
			<input name="wanneer" value="<?php echo $todo['wanneer']; ?>"><br>

			<label for="hoe">Hoe:</label><br>
			<input name="hoe" value="<?php echo $todo['hoe']; ?>"><br>

			<input type="submit" name="submit" value="save">
		</form>
	</body>
</html>