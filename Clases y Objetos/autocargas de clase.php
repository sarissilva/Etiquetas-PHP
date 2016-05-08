<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

$obj  = new MiClase1();
$obj2 = new MiClase2();
?>
</body>
</html>