<?php 

$my_name = 'Anuska';
$my_lastname = 'Sampedro';

echo "<strong>First name </strong>: {$my_name}. <br>";
echo "<strong>Last name </strong>: {$my_lastname}. <br>";

$year_of_birth = "1988";
$height = "167";

echo "I was born in {$year_of_birth} and I am {$height} cm tall.";

//Funtions 3

function headline($text) 
{
    echo "<h1> ${text} </h1>";
    echo '<h1>' . $text . '</h1>';
}

// Functions 4

$inches = 12;

function inchesToCentimeters($in)
{
    return $in * 2.54;
}
echo inchesToCentimeters($inches);


//echo something that will print right

// Funtions 5

$celsius = 100;

function celsiusToFahrenheit($c)
{
    return (9/5) * $c + 32;
}
echo celsiusToFahrenheit($celsius);


// Conditions 

$temperature = 36;

function isHealthy($temp, $unit)
{
    if ($unit == 'f') {

        $temp = ($temp - 32) / (9/5);
    }
    return $temp;
        
    if ($temp < 37) {
    return "The person is healthy";
     } else {
    return 'The person has a fever';
     }
}
echo (isHealthy($temperature, 'c'));


// Ternary operator

$number = 42;
function evenOrOdd($number)
{
    return $number % 2 ? 'odd' : 'even';
}
echo evenOrOdd($number);


// Concatenation #1

$weekday = date('l');
function sayWeekday($name_of_day)
{
    echo "Today is {$name_of_day}";
}
sayWeekday($weekday);


// Concatenation #2
$year_of_birth = 1988;
function sayBirthday($year)
{
    $this_year = date('Y');
    echo "I was born in {$year} so this year I am celebrating my ".($this_year - $year).". birthday";
}


// Conditions
function assessHeight($height)
{
    if ($height >= 180) {
        return 'tall';
    } elseif ($height >= 160) {
        return 'average';
    } else {
        return 'small';
    }
}
echo assessHeight(186);


// Switch, PHP.net
function getLanguageUsage($language)
{
    $lowercase = strtolower($language);
    switch ($lowercase) {
        case 'php':
        case 'python':
        case 'ruby':
            return 'serverside';
            break;
        case 'javascript':
            return 'clientside';
            break;
        default:
            return 'I don\'t know';
            break;
    }
}
echo getLanguageUsage('php');
echo getLanguageUsage('javascript');
echo getLanguageUsage('python');
echo getLanguageUsage('PHP');
echo getLanguageUsage('php');
echo getLanguageUsage('Php');
echo getLanguageUsage('javascript');
echo getLanguageUsage('JavaScript');
echo getLanguageUsage('NODE');



// Logical operators
$age = 32;
$gender = 'm';
$employed = true;
if ($age < 25) {
}
if ($employed) {
}
if ($age > 34 && !$employed) {
}
if ($age < 12 && $gender == 'f') {
}
if ($age >= 18 && !$employed) {
}
if ($age >= 60 && $employed && $gender == 'f') {
}
if (($gender == 'm' && $age > 20) || ($gender == 'f' && !$employed && $age > 25)) {
}