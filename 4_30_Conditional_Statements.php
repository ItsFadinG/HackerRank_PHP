// Even number is : that can be divided exactly by 2.
// Odd number is : that cannot be divided exactly by 2.
// Modulus is an important Opereator
<?php
if ($N % 2 == 1) die("Weird");

if ($N >= 2 && $N <= 5) die("Not Weird");

if ($N >= 6 && $N <= 20) die("Weird");

if ($N > 20) die("Not Weird");

?>
