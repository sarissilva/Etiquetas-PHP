<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class A {
    public $foo = 1;
}  

$a = new A;
$b = $a;     // $a y $b son copias del mismo identificador
             // ($a) = ($b) = <id>
$b->foo = 2;
echo $a->foo."\n";


$c = new A;
$d = &$c;    // $c y $d son referencias
             // ($c,$d) = <id>

$d->foo = 2;
echo $c->foo."\n";


$e = new A;

function foo($obj) {
    // ($obj) = ($e) = <id>
    $obj->foo = 2;
}

foo($e);
echo $e->foo."\n";

?>
</body>
</html>