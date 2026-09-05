<?php

$choice =["stone", "papper","secisore"];
$p_score = 0;
$c_score = 0;


while($p_score < 3 || $c_score < 3){
$palyer = strtolower(readline("chose one of the stone/papper/secisore "));


sleep(1);

    if(!in_array($palyer, $choice)){
        echo "invalid choise: ";
        exit(0);
    }

    $index= mt_rand(0,2);
    $computer = $choice[$index];



    sleep(1);

    echo "player choise => $palyer \n";

    sleep(1);

    echo "computer choise => $computer \n";

    sleep(1);


    if($palyer == $computer){
        echo "oops Draw bro \n";
        echo "let's go again";
    }
    elseif (
        ($palyer == "stone" && $computer == "secisore" ||
        ($palyer == "papper" && $computer == "stone") ||
        ($palyer == "secisore" && $computer == "papper"))
        ){
            echo "player win! \n";
            $p_score++;
          
            echo "player score: $p_score \n";
            
        }
    else{
            echo "computer win! \n";
            $c_score++;
            
            echo "computer score: $c_score \n";
            

        }


        if($p_score == 3){
            echo "player win!";
            exit;
        }elseif($c_score == 3){
            echo "compmuter win!";
            exit;
        }

}

?>