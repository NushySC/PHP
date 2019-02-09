<?php 

$my_name = "Anuska";
$my_height = "1.7";

var_dump($my_name);
var_dump($my_height);

//// Functions 1-2

function headline($text)
{
    echo "<h1> ${text} </h1>";
    echo '<h1>' . $text . '</h1>';
};

headline('Hola!');

/// Functions 3


$inches = 2;

function inchestocentimetres($in)
{
    return $in * 2.54;
}

echo inchestocentimetres($inches);
$cm = inchestocentimetres($inches);
echo '<p>'. $inches . 'in are ' . $cm . 'cm.</p>';

///Functions 4

$celsius = 30;

function celsiustofahrenheit($cel)
{
    return (9/5) * $cel + 32;
}

echo celsiustofahrenheit($celsius);
$fah = celsiustofahrenheit($celsius);
echo '<p>'. $celsius . ' degrees C are ' . $fah . ' degrees F.</p>';


/// Funtions 5

$temperature = 36;

function ishealthy($temp)
{
    if ($temp < 37 ){
        echo 'This person is healthy';
    } else {
        echo 'This person is sick';
    }
};

ishealthy($temperature);


///Terniary 6

$number = 42;

function evenorodd($num) {
    if ($num % 2 === 0){
        echo '<p>'. 'This is an even number.'. '</p>';
    } else {
        echo '<p>'.'This is an odd number.'.'</p>';
    }
}

evenorodd(7);


function evenorodd2($num){
    return $num % 2 ? 'odd' : 'even';
   }
evenorodd2(8);


/// Concatenation 1 

$weekday = 'Wednesday';

function sayweekday($day) {
    echo 'Today is ' . $day . ' .';
}

sayweekday($weekday);


// Concatenation 2

$yearofbirth = 1988;

function saybirthday($year)
{
    $thisyear = date('Y');
    $birthday = $thisyear - $year;
    echo 'I was born in ' .  $year . ' so this year I am turning ' . $birthday . '.';
}

saybirthday($yearofbirth);