<?php

require_once 'User.php';  //?

$total_users = 0;

$steve = new User('steve'); // parenthesis are optional

$steve->id = 1;
//$steve->username = 'steve';
$steve->name = 'Stephen';

//var_dump($steve);
//echo "The name of user {$steve->id} is {$steve->name}<br>";

$bob = new User('bob');
$bob-> name = "Robert";


$steve->dumpMe();
$bob->dumpMe();


//var_dump($total_users);

unset($steve); //deletes user (function __destruxt deletes the whole thing)


var_dump($total_users);
