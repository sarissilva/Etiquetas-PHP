<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class BaseClass {
   public function test() {
       echo "llamada a BaseClass::test()\n";
   }
   
   final public function moreTesting() {
       echo "llamada a BaseClass::moreTesting()\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "llamada a ChildClass::moreTesting()\n";
   }
}
// Devuelve un error Fatal: Cannot override final method BaseClass::moreTesting()
?>
</body>
</html>