<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, float, and String variables.
// Read and save an integer, float, and String to your variables.
$integr = intval(fgets($handle));
$float = floatval(fgets($handle));
$string = fgets($handle);
// Print the sum of both integer variables on a new line.
echo $integr + $i;
echo '
';
// Print the sum of the double variables on a new line.
$sum = $float + $d;
echo number_format($sum, 1);
echo '
';
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s . $string;
fclose($handle);
?>
