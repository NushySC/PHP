<?php 
$timeserved = 0;

while ($timeserved < 10){
    $timeserved++;
    echo "The prisioner has served $timeserved.<br>";
}

///


do {
    $time_served++;
    echo "The prisoner has served {$time_served} years";
} while {
    ($time_served < 10) 
}


///

for ($i = 0; $i < 5; $i++) {
    $yearsleft = 5 - $i;
    echo "The prisioner has {$yearsleft}.<br>";
}


///
for ($i = 10; $i > 0; $i--) {
    echo "The prisoner has {$i} more years to serve.<br>";
    if ($i > 5) {
        continue;
    }
    echo 'Going to a parole hearing...<br>';
    if ($i == 2) {
        echo 'Paroled!';
        break;
    }
}