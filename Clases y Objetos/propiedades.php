<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class ClaseSencilla
{
   // Declaración de propiedades inválidas:
   public $var1 = 'hola ' . 'mundo';
   public $var2 = <<<EOD
hola mundo
EOD;
   public $var3 = 1+2;
   public $var4 = self::miMétodoEstático();
   public $var5 = $myVar;

   // Declaración de propiedades válidas:
   public $var6 = miConstante;
   public $var7 = array(true, false);

   // Esto se permite solamente en PHP 5.3.0 y posterior.
   public $var8 = <<<'EOD'
hola mundo
EOD;
}
?>
</body>
</html>