<?php
$movie_name = 'Arrival';
$ratings = [
    'user1' => 65, 
    'user2' => 95, 
    'user3' => 82
];

function format_rating($rating) 
{
    return $rating  . ' %';
}


foreach ($ratings as $rating){
    //echo format_rating($rating);   
    echo $get_username($user_id) . ' gave ' . $movie_name . ' a rating of ' . $format_rating($rating) . '<br>'; 
}

function get_username($user_id)
{
    $user_names = [
        'user1' => 'Bob',
        'user2' => 'Stuart',
        'user3' => 'Kevin'
    ];

    return $usernames[$user_id];
}

//echo get_username('user1')

