<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);
for ($i = 1; $i <= 10; $i++){
  $n;
  echo $n . ' x ' . $i . ' = ';
  echo $n * $i;
  echo '
';
}
fclose($stdin);

?>
