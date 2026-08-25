<!-- Question 7:
  The Bouncer Logic-= , Create a script that checks a person's age. If they are 18 or older, echo "Access Granted." If they are under 18, calculate how many years are left until they turn 18 and echo "Access Denied. Please return in X years."  -->

<?php

$age = readline("Enter you age: ");
$min_age_req =18;


if($age >= 18){
    echo "Access granted";
}else{
    echo "You are too young \n";
    echo "Try after " , $min_age_req - $age ,   " later";
}


?>
