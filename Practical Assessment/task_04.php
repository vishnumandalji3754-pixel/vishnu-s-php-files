<!-- Question 4: The Increment/Decrement Puzzle Initialize a variable var_dump() is $x = 10 . Write a script that uses pre-increment, post-increment, predecrement, and post-decrement operators on $x . Echo the value of short comment explaining the output at each line.  -->

<?php

$a = 1;
$b = ++$a;
echo "pre-increment $b \n"; # in pre-increment firt it increase and the use 

$x = 1 ;
$x++;
echo "post-increment $x \n"; #in post-increment first use and then it increase the value



$y=1;
$z=--$y;
echo "predecrement $z \n";


$z=1;
$z--;
echo "post-decrement $z \n";


?>