<?php

require 'fellowship.php';

$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];

$party['gandalf'] = 'Gandalf the grey';

unset($party['Bilbo']);

$party['Sam'] = 'Samwise Gamgee';

unset($party['Gandalf']);

function leave_hobbiton()
{
    global $party;
    $party = array_merge($party, [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
}

leave_hobbiton();

function go_to_bree($party) 
{
    $party['Strider'] = 'Strider';
    return $party;
}

$party = go_to_bree($party);

function go_to_weathertop($party)
{
    $party = array_merge($party,
    [
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
        ]);
    }

go_to_weathertop($party);

function meet_arwen(&$party)
{
    $party['Arwen'] = 'Arwen Undómiel';
    array_splice($party, -10, 9);
}

meet_arwen($party);

function go_to_rivendell($party)
{
    unset($party['arwen']);
    $party = array_merge($party, [
        'gandalf' => 'Gandalf the Grey',
        'boromir' => 'Boromir',
        'legolas' => 'Legolas',
        'gimli' => 'Gimli'
    ]);

    $party['Stider'] = 'Aragorn';

    return $party;
}

$party = go_to_rivendell($party);

present_party($party);