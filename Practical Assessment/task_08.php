<!-- Question 8: 
 Multi-Condition Grade System Write a grading system that evaluates a combined with logical operators ( && or $marks variable (0 to 100). Use if-elseif-else || ) to ensure the marks are within the valid range before grading. Output "A" (90-100), "B" (80-89), "C" (70-79), "D" (60-69), or "F" (below 60). If the marks are invalid (e.g., 105 or -5), print "Invalid Input".  -->

 <?php
 

echo "Check your grade by just entering your marks: \n"; 
$marks =readline("Enter you marks: ");



 if(90 <= $marks && $marks <= 100){
    echo "wow your grade is 'A' excellent ";
 }
 elseif(80 <= $marks && $marks <= 89){
    echo "wow your grade is 'B' very good";
 } 
 elseif(70 <= $marks && $marks <= 79){
    echo "wow your grade is 'C' good";
 } 
 elseif(60<= $marks && $marks <= 69){
    echo "wow your grade is 'D' good";
 }elseif(0 <= $marks && $marks < 60){
    echo "Your garde 'F' very poor focus in your study";
 }
 else{
    echo "Invalid input \n";
    echo "Please enter a valid marks  bw (0 - 100)";
 }


 ?>