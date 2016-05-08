<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// Nombre de constantes correctos
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Nombres de constantes incorrectos
define("2FOO",    "something");

// Esto es válido, pero debería ser evitado:
// Ya que quizá algún día PHP crea una constante mágica 
// con el mismo nombre y en ese caso provocaría un error en tu script
define("__FOO__", "something"); 

?>
</body>
</html>