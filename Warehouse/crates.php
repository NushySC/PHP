<?php 

require_once 'Warehouse.php';

$warehouse_one = new Warehouse();
$warehouse_one->name = 'Trainyard warehouse';
$warehouse_two = new Warehouse();
$warehouse_two->name = 'Docks warehouse';

var_dump($warehouse_one);
var_dump($warehouse_two);

//$warehouse_one->nr_of_crates = 0;