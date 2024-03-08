<!DOCTYPE html>
<html>
<head>
<title>PHP FORMS</title>
</head>
<body>

<form action="welcome.php" method="get">
First name: <input type="text" name="fname">
<input type="submit">
</form>
<form action="welcome.php" method="post">
First name: <input type="text" name="fname">
<input type="submit">
</form>

Welcome <?php echo $_GET["fname"]; ?>

Welcome <?php echo $_POST["fname"]; ?>

</body>
</html>