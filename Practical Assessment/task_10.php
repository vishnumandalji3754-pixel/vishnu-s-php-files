<!-- Question 10:
  Simple Login Validator Assume two variables: $stored_username = "admin" and "secret123" . Create two input variables $stored_password = $input_user and $input_pass . Use a nested if statement or logical operators to check if both the username and password match. If they do, echo "Login Successful". If only the username is wrong, echo "User not found". If the username is correct but the password is wrong, echo "Incorrect password".  -->

  <?php

  $username = "vishnu";
  $password = "vishnu123";
  $inpur_username = readline("Enter your user name  ");
  $input_password = readline("Enter your password  ");

  if($username == $inpur_username && $password == $input_password){
    echo"User is logged in";
  }elseif($username != $inpur_username){
    echo "You have enter wrong user name: ";
  }
  elseif($password != $input_password){
    echo "You have enter wrong user password: ";
  }else{
    echo "User not found: ";
  }
  
  
  
  ?>