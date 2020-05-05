//echo Hello world
// echo Welcome to 30 Days of Code! but in variable called inputString
//php file system is Important (fopen, fclose, fgets).


<?php
$f = fopen('php://stdin', 'r');

$inputString = fgets($f);

print("Hello, World.\n");
print("$inputString");
fclose($f)

?>
