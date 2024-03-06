<!DOCTYPE html>
<html>
<head>
<title>PHP STRINGS</title>
</head>
<body>

<?php
echo strlen("Hola Mundo!");
echo "<br>";
echo strrev("Hola Mundo!");
echo "<br>";
$oldtxt = "Hola Mundo!";
$newtxt = str_replace("Mundo", "Carlos", $oldtxt);
echo $newtxt;
?> 

</body>
</html>
