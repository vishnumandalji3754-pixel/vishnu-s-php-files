<!-- Question 1: The Profile Card Create a PHP script that declares variables for a student's name, age, course, and enrollment status (boolean). Use these variables to print a formatted "Student Profile" using both single and double quotes to demonstrate the difference in variable parsing.  -->

<?php

$name ="vishnu";
$age =21;
$course ="BCA";
$enroll =TRUE;



echo "===== Student Profile =====\n";

echo "Student => $name \n";
echo "Age is $age \n";
echo "course is '$course' \n";
echo "stduent is status $enroll \n";

if($enroll){
    echo "student is enroll";
}else{
    echo "student is not enroll";
    }



?>
