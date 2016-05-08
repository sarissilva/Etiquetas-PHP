<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class MyClass {
    const CONST_VALUE = 'Un valor constante';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // A partir de PHP 5.3.0

echo MyClass::CONST_VALUE;
?>
</body>
</html>