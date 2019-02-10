<?php 

require_once 'Match.php';

class IceHockeyMatch extends Match 
{
    public $number_of_players = 12;
    public $legnth = 60;
    public $thirds = [ '0:0', '0:0', '0:0' ];

    public function getThirdScore($third_number)
    {
        return $this->thirds[$third_number-1];
    }

}