<!DOCTYPE html>
<html>
<head>
<title>PHP FUNCTIONS</title>
</head>
<body>

<?php
function myFunctiona() {
  echo "¡Hola Mundo!";
}
myFunctiona();
echo "<br>";

function myFunctionb($fname, $lname) {
  echo $fname;
}
myFunctionb("Carlos", "Ruiz");
echo "<br>";

function myFunctionc($fname, $lname) {
  return $lname;
}
echo myFunctionc("Carlos", "Ruiz");
?>

</body>
</html>
