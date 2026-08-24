/* Question 5: Compound Assignment
  A store starts with a total inventory of 500 items. Using compound assignment operators ( +=, -= etc.), simulate the following events: • • • 
  ->150 items are sold.
  ->A new shipment of 200 items arrives. 
  ->Half of the total inventory is moved to a different warehouse.
Print the final inventory count.  */

<?php

$total_inventoey =500;
$sold_items =150;
$new_items =200;

// $total_inventoey = $total_inventoey - $sold_items;
$total_inventoey -= $sold_items;

echo "After sold the $sold_items inventory , the remaining inventory are: =>'$total_inventoey'\n";
echo "$new_items new items are added to the inventroy: \n";

// $total_inventoey = $total_inventoey + $new_items;
$total_inventoey +=$new_items;
echo "Now the items in the inventory are => '$total_inventoey' \n";




?>