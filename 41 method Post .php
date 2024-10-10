<html lang="en">
 
<head>
    <title>Method POST</title>
</head>
 
<body>
    <form action="" method="POST">
        <input type="text" name="nama"><br />
        <input type="number" name="umur"><br />
        <input type="submit" name="submit" value="Sumbit">
    </form>
 
    <?php
    if ($_POST) {
        echo "Nama: " . $_POST["nama"];
        echo "<br/>";
        echo "Umur: " . $_POST["umur"];
    }
    echo "<p><i><strong>By:ilham</strong>";

    ?>

</body>
 
</html>