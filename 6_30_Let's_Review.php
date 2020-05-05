<?php
// s = string
// n = length - 1 (indexed)
// t = the number of test cases
// each line = i contain a string;
$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%d\n", $n);
for($t=0; $t<$n; $t++) {
    fscanf($_fp, "%s\n", $str);
    for($i=0; $i<strlen($str); $i+=2) echo $str[$i];
    echo ' ';
    for($i=1; $i<strlen($str); $i+=2) echo $str[$i];
    echo "\n";
}
fclose($stdin);


?>
