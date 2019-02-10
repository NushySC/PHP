<?php 
$cars_i_want = [];
var_dump($cars_i_want);

array_push($cars_i_want, 'Aston Martin',
'Bugatti',
'Ferrari',
'Lamborghini',
'Maserati',
'Mercedes',
'Porsche',
'Skoda');

var_dump($cars_i_want);

echo "For myself I would buy a $cars_i_want[1]<br>";
echo "For my wife I would get a $cars_i_want[3]<br>";
$cars_i_want[4] = 'Smart';
var_dump($cars_i_want);
echo "Each of my kids will get a $cars_i_want[4]<br>";


    function printcar ($cars_i_want) {

        echo "For myself I would buy {$cars_i_want[1]}.<br>";
        echo "For my spouse I would buy {$cars_i_want[3]}.<br>";
    }
    
    printcar($cars_i_want);
    
    $cars_i_want[4] = 'Smart';

    
    $my_number = 123;
 
unset($my_number);

foreach ($cars_i_want as $car) {
    echo '<li> Car name: ' . $car . '</li>';
}
    
