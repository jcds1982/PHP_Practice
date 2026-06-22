<?php
require_once 'P01/Lasagna.php';


echo "
#########   ##          #########
##      ##  ##          ##      ##
##      ##  ##          ##      ##
#########   #########   #########
##          ##      ##  ##
##          ##      ##  ##
##          ##      ##  ##
\n\n";

// Testing Class Lasagna
$lasagna = new Lasagna();
echo "Remaining cook time: " . $lasagna->remainingCookTime(30) . " minutes \n";
echo "Total Preparation Time: " . $lasagna->totalPreparationTime(3) . " minutes \n";
echo "Total elapse Time: " . $lasagna->totalElapsedTime(4, 13) . " minutes \n";



