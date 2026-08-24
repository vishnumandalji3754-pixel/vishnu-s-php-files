<!-- Question 3: Type Debugging $mass . Print the final result formatted as Initialize an integer, a float, a string, and a boolean variable. Use the var_dump() function to display the data type and value of each variable. Explain in a brief comment why useful for debugging.  -->


<?php
$mass =10;
$price =10.5;
$name ="vishnu";
$bollean = TRUE;

echo "<***********variable data type*************> \n";

var_dump($mass);
var_dump($price);
var_dump($name);
var_dump($bollean);

?>