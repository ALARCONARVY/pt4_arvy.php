<?php
 // Using a while loop
 $sum = 0;
 $i = 1;
 $N = 10;
 while ($i <= 10) {
   $sum += 1.0 / $i;
   $i++;
 }
 
 echo " Enter N: " . $N . "\n";
 echo "<br>";
 
 // Using a do-while loop
 $sum = 0;
 $i = 1;
 
 do {
   $sum += 1.0 / $i;
   $i++;
 } while ($i <= 10);
 
 echo "Sum : " . $sum . "\n";
 ?>