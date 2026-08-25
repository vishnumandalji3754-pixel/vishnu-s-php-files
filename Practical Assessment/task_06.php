<!-- Question 6: 
 The E-commerce Discount Write a PHP script for a shopping cart discount system. Given a variable += , $total_amount : • • • If the amount is greater than or equal to $500, apply a 20% discount. If the amount is between $200 and $499, apply a 10% discount. If the amount is strictly less than $200, apply no discount. Calculate and print the final payable amount.  -->

 <?php

echo "Enter amount in '$' \n";
$total_amount = readline("Enter total amount: ");

if($total_amount > 500){
    $total_amount -= ($total_amount * 20 / 100);
    echo "You are got 20% discount ,Total amount => \$$total_amount \n";
    echo "Thankyou for shopping";
}
elseif($total_amount >= 200 && $total_amount <= 499){
    $total_amount -= ($total_amount * 10 / 100);
    echo "You are got 10% discount , Total amount => \$$total_amount \n";
    echo "Thankyou for shopping";
}else{
    echo "No discount total amount => \$$total_amount \n";
    echo "Thankyou for shopping";
}
 
 ?>