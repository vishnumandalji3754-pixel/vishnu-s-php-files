/*
Question 9: 
 Odd or Even (Modulo Operator) Declare a variable $number . Use the modulo operator ( % ) inside an if-else statement to determine if the number is odd or even. Print "The number X is Even" or "The number X is Odd".  
 */ 

 <?php


echo "Check the number is odd or even \n";
$number = readline("Enter a number: ");
if($number % 2 == 0){
    echo "$number is even number";

}else{
    echo "$number is a odd number";
}


 ?>
