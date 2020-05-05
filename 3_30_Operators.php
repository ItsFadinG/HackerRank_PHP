

<?php

// Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent) {

$meal_tips = $meal_cost * $tip_percent / 100;
$meal_tax = $meal_cost * $tax_percent / 100 ;
$Total = $meal_tips + $meal_tax + $meal_cost;
echo round($Total);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%lf\n", $meal_cost);

fscanf($stdin, "%d\n", $tip_percent);

fscanf($stdin, "%d\n", $tax_percent);

solve($meal_cost, $tip_percent, $tax_percent);

fclose($stdin);


?>
