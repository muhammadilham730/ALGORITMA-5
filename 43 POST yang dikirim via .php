<html>
<body>
	<form method="POST" action="?action=edit">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	if ($_POST)
	{
		echo '<pre>'; 
		print_r($_GET);
		print_r($_POST);
	}

    

    echo "<p><i><strong>By:ilham</strong>";

	?>
</body>
</html>