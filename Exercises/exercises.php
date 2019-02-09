<?php 

//Variables

$my_name = 'Anuska Sampedro';
$height = 1.7;

var_dump($my_name);
var_dump($height);


//Functions #3

function headline($text) {
    echo "<h1> ${text} </h1>";
}

headline('My website');

//Functions #2

function print_headline($text) {
    echo "<h1>' ${text} '</h1>'";
}

print_headline('My website');

//Functions #3

$inches = 12;

function inchesToCentimeters($inches) {
   $inches * 2.54;
}
;
$centimetres = inchesToCentimeters($inches);

// Functions #$4

$celsius = 100;

 function celsiusToFahrenheit($celsius) {
    (9/5) * $celsius + 32;
 }

$fahrenheit = celsiusToFahrenheit($celsius);
 

 //Conditions #!

 
$temperature = 36;

function ishealthy($temperature, 'c', 'f') {

    if ($temperature === $temperature . 'f') {
        

    }
}

// Ternary Operator

$number = 42;

function evenOrOdd($number) {
    $return % 2 == 0 ? "Even": "Odd";
}

echo isEvenOrOdd($number); 

// Concatenation #1
$weekday = 'Tuesday';

function sayweekday() {
    echo "Today is ${weekday}.";
}

//Concatenation #2
$year_of_birth = 1988;

function sayBirthday() {
    $this_year = date('Y');
    echo 'I was born in ' .  ${year_of_birth} . 'so this year I am celebrating my ' . (${this year} - ${yearOfBirth}). 'birthday'.
}

sayBirthday($yearOfBirth);

// Conditions 

function assessHeight(s) 
{
    if ($height > 180) {
        return 'Tall';
    } elseif ($height < 180 && $height > 160) {
        return 'Average';
    } else {
        return 'Short';
    }
}
}

assessHeight(167);

//Switch

function getLanguageUsage($language) {
    switch {
        case: 'php'
        case:'python' 
        case: 'ruby';
            return 'Backend';
            break;

    }
}



/// Functions

$today = 'Monday'; //date('l');
var_dump($today); // Tuesday
function greet($whom)
{
    global $today;
    $today = 'Monday';
    return 'Hello, '.$whom.', such a nice '.$today.' we have!';
}
var_dump($today); // Tuesday
$whom = 'children';
$greeting = greet($whom);
var_dump($today); // Monday
echo $greeting;


/// More functions


$name = 'Anuska';
$name .= ' Sampedro';
$name = $name . 'Carballeira';



// ternary operator


$today = date('l');
$shop_status = ($today == 'Sunday' || $today == 'Saturday') ? 'closed' : ($today == 'Saturday' ? 'closing' : 'open');
var_dump($shop_status);
echo 'The shop is '. ($today == 'Sunday' ? 'closed' : 'open');

