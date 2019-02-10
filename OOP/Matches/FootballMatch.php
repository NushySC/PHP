<?php

require_once 'Match.php'; 

class FootballMatch extends Match
{
    public $number_of_players = 22;
    public $length = 90;
    public $halves = ['0:0', '0:0'];
    public $nr_offsides = 0;
}