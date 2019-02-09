<?php
require 'DBBlackbox.php';

$page_title = 'Shopping list';
$page = 'home';


if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$items = [];


if (!empty($_POST['items'])) { // $_POST['items'] is set & not empty ('', 0, [])

    var_dump($_POST);
    $items = array_filter($_POST['items']);
}


foreach ($items as $i => $item) {
    $item_to_save = [
        'name' => $item
    ];
    $saved = find($i);
    if (!$saved) {
        insert($item_to_save);
    } else {
        update($i, $item_to_save);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morning workout</title>
</head>
<body>
    <h1><?= $page_title ?></h1>

    <nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
    </nav><br>

    <?php if($page == 'home'): ?>
        <?php include 'home.php'; ?>

        <?php elseif($page == 'form'): ?>
        <?php include 'form.php'; ?>
        <?php endif; ?>



</body>
</html>