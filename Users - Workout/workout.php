<?php

require_once 'Auth.php';

$user_id = 5;

session_start();

var_dump($_SESSION);

//$_SESSION['user_id'] = $user_id;

$username = 'Nushy';

$user = [
    'user_id' => $user_id,
    'username' => $username
];

Auth::addUser(['user_id' => 1, 'username' => 'Kevin']);
Auth::addUser(['user_id' => 2, 'username' => 'Stuart']);
Auth::addUser(['user_id' => 3, 'username' => 'Bob']);
Auth::addUser(['user_id' => 4, 'username' => 'Blob']);

auth::addUser($user);

var_dump(Auth::getUsers());

$current_user = auth::getCurrentUser();

var_dump($current_user);