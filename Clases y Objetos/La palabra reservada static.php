<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class Foo {
    public static function unMetodoEstatico() {
        // ...
    }
}

Foo::unMetodoEstatico();
$nombre_clase = 'Foo';
$nombre_clase::unMetodoEstatico(); // A partir de PHP 5.3.0
?>
</body>
</html>