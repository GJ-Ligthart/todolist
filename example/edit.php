<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','library');
	
	
	// prepare id from the url querystring to find the record
	$id = $_GET['id'];
	
	// prepare query to select data from the table books for id 
	$sql = "SELECT * FROM books WHERE id = $id";
	
	// execute the query 
	$result = $connection->query($sql);
	
	// fetch selected book to store in variable: book
	$book = $result->fetch_assoc();
?>
<!doctype html>
<html>
<body>
	<form action="update.php" method="post">
		<!-- inject book id in hidden field -->
		<input type="hidden" name="id" value="<?php echo $book['id']; ?>"><br>
		
		<label for="title">Title:</label><br>
		<!-- inject book title -->
		<input name="title" value="<?php echo $book['title']; ?>"><br>

		<label for="author">Author:</label><br>
		<!-- inject book author -->
		<input name="author" value="<?php echo $book['author']; ?>"><br>

		<input type="submit" name="submit" value="save">
	</form>
</body>
</html>