<!-- Question 2: Constant Calculations Define a PHP constant named GRAVITY with a value of 9.8. Write a script that calculates the weight of an object on Earth given its mass in a variable "The weight of a X kg object is Y Newtons."  -->

<?php

// $weight = $mass * $gravity_const;

$mass = readline("enter mass of in KG: ");
$gravity_const = 9.8;
$weight = $mass * $gravity_const;

echo "The weight of a $mass kg object is $weight Newtons. ";







?>