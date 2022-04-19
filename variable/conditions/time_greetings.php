<html>
<!-- 2. "Different greetings according to time" Exercise -->

<?php 
date_default_timezone_set('Europe/Amsterdam');
$now = date("h");
echo "The time is " . date("h:i:sa <br>");


// Test the value of $now and display the right message according to the specifications.
if($now >= 5 AND $now <= 9){
    echo "Good Morning! \r\n";
} elseif ($now > 9 AND $now <= 12) {
    echo "Good day You! I said Good DAY!";
} elseif ($now > 12 AND $now <= 16) {
    echo "Good Afternoon!";
} elseif ($now > 16 AND $now <= 21) {
    echo "Good evening!";
} elseif ($now > 21 AND $now < 5)

?> 

</html>