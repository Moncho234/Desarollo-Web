<?php
session_start();

setcookie("username", "John", time() + (86400 * 30), "/");

include 'footer.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP ADVANCED</title>
</head>
<body>

<?php
readfile("webdict.txt");

$myfile = fopen("webdict.txt", "r");

while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);

$_SESSION["favcolor"] = "green";

echo $_SESSION["favcolor"];
?>

</body>
</html>
