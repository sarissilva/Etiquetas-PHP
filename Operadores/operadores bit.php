<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo 12 ^ 9; // Sale '5'

echo "12" ^ "9"; // Sale el caracter de retroceso (ascii 8)
                 // ('1' (ascii 49)) ^ ('9' (ascii 57)) = #8

echo "hallo" ^ "hello"; // Salen los valores ascii #0 #4 #0 #0 #0
                        // 'a' ^ 'e' = #4

echo 2 ^ "3"; // Sale 1
              // 2 ^ ((int)"3") == 1

echo "2" ^ 3; // Sale 1
              // ((int)"2") ^ 3 == 1
?>
</body>
</html>