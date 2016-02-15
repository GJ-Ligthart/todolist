<?php 
	 // server, username, password, databasename
	 $connection= new mysqli('localhost','root','','todolist');

	 $sql = 'SELECT * FROM gegevens';

	 $buffer = $connection->query($sql);

	 $gegevens = $buffer->fetch_all(MYSQLI_ASSOC);

	// var_dump($gegevens)
?>

<ul>
	<?php foreach ($gegevens as $info) { ?>
	 	<li>
		  id:<?php echo $info['id']; ?>
		  Wat:<?php echo $info['wat']; ?>
		  Wanneer: <?php echo $info['wanneer']; ?>
		  Hoe:<?php echo $info['hoe']; ?>
		  <a href="edit.php?id=<?php echo $info ['id'] ?>"> Edit </a>
		  <a href="delete.php?id=<?php echo $info ['id'] ?>"> Delete </a> 
	    </li>
	<?php } ?>
</ul>

<form action="insert.php" method="post">
	<label for="wat">Wat:</label><br>
	<input name="wat"><br>

	<label for="wanneer">Wanneer:</label><br>
	<input name="wanneer"><br>

	<label for="hoe">Hoe:</label><br>
	<input name="hoe"><br>

	<input type="submit" name="submit" value="save">
</form>