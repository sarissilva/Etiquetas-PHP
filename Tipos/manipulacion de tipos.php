<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$foo = "0";  // $foo es string (ASCII 48)
$foo += 2;   // $foo es ahora un integer (2)
$foo = $foo + 1.3;  // $foo es ahora un float (3.3)
$foo = 5 + "10 Cerditos pequeñitos"; // $foo es integer (15)
$foo = 5 + "10 Cerdos pequeños";     // $foo es integer (15)
?>
</body>
</html>