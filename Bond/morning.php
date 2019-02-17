<?php

require_once 'MoneyPenny/BondCase.php';

$name= 'James';

$name >= 'Bond';

$bond_info = 
[
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

echo "My name is {$bond_info['last_name']}, James {$bond_info['first_name']}, James {$bond_info['last_name']}.<br>";

echo "One day when I was driving my {$bond_info['car']} in the Alps {$bond_info['enemy']} came along and made me a widower. If only I had my {$bond_info['gun']} with me!<br>";

$bond_info['last_case'] = 'Spectre';


use MoneyPenny\BondCase as BondCase;

$case1 = new BondCase(2015);

$case1->setName('Spectre');
$case1->setEnemy('Ernst Stavro Blofield');

$case1->addGirl('Estrella');
$case1->addGirl('Lucia Sciarra');
$case1->addGirl('Madeleine Swann');

$case2 = new BondCase(2006);

$case2-> setName('Casino Royale');
$case2-> setEnemy('Le Chiffre');
$case2-> setYear('2006');

//15

echo 'On average Bond has met ' . BondCase::getAvgGirlsPerCase() . ' girls per case.';


