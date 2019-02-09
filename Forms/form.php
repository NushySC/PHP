<?php

require 'lib/DBBlackbox.php';

// handle the incoming request here

// to save any data to the "database":
// insert($any_data)
// $any_data MUST be an array

//insert(['foo' => 'bar']);

var_dump($_POST);

function give_me_post_data($index, $default = '')
{
    if (isset($_POST[$index])) {
        $data = $_POST[$index];
    } else {
        $data = $default;
    }
    return $data;
}

function print_post_data($index, $default = '') 
{
    $raw_data = give_me_post_data($index, $default='');
    $encoded_data = htmlspecialchars($raw_data);
    return htmlspecialchars(give_me_post_data($index, $default=''));
}


$data_to_save = [
    'name'=> give_me_post_data('name'),
    'text'=> give_me_post_data('text')
];

insert($data_to_save);


// $name = give_me_post_data('name');
// $text = give_me_post_data('text');
// $age = give_me_post_data('age', 18);
// $sex = give_me_post_data('sex', 'f');

// if (isset($_POST['name'])){  ///// these variables were added to the more general one above.
//     $name = $_POST['name'];
// } else {
//     $name = '';
// };

// if (isset($_POST['text'])){
//     $text = $_POST['text'];
// } else {
//     $text = '';
// }

function print_option($value, $label, $name)
{
    ?>
        <option value="<?= $value ?>" <?= give_me_post_data($name) == $value ? 'selected' : '' ?>><?= $label ?></option>
    <?php
}


function select_field($name, array $values, $selected = null, $html_attributes = '')
{
    $html = '';
    $html .= "<select name=\"{$name}\" {$html_attributes}>";
    foreach ($values as $value => $label) {
        $selected_attr = $value == $selected ? 'selected' : '';
        $html .= "<option value=\"{$value}\" {$selected_attr}>{$label}</option>";
    }
    $html .= '</select>';
    return $html;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms exercise</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body>
    <form action='' method="post">
    <label name="name">Your name</label><br>
    <input type="text" name="name" value="<?= print_post_data('name') ?>"><br>

    <label name="message">Your message</label><br>
    <textarea name="text" cols="30" rows="10"><?= print_post_data('text') ?></textarea><br>

    <select name="color">
    <option value="white">White</option>
    <option value= "black">Black</option>
    </select>

    <input type="submit" value="Click here">
    </form>
    
</body>
</html>

