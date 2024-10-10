<html>
<body>
	<form method="POST" action="">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	if ($_POST)
	{
		echo 'Nama: ' . $_POST['nama'];
		echo '<br>';
		echo 'Email: ' . $_POST['email'];
	}

    echo "<p><i><strong>By:ilham</strong>";

?>
</body>
</html>