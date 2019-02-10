<?php
$datetime_of_birth = '1982-06-05 12:00:00';
$timestamp_od_birth = strtotime($datetime_of_birth);
$current_timestamp = time();
$age_in_sec = $current_timestamp - $timestamp_od_birth;
var_dump($age_in_sec);