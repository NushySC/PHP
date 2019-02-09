<?php

require 'DBBlackbox.php';


function give_me_post_data($index, $default = '')
{
    if (isset($_POST[$index])) {
        $data = $_POST[$index];
    } else {
        $data = $default;
    }
    return $data;
}
var_dump(select());

function print_post_data($index, $default = '') 
{
    $raw_data = give_me_post_data($index, $default='');
    $encoded_data = htmlspecialchars($raw_data);
    return htmlspecialchars(give_me_post_data($index, $default=''));
}


$data_to_save = [
    'name'=> give_me_post_data('name'),
    'plot'=> give_me_post_data('plot'),
    'century' => give_me_post_data('century'),
    'like' => give_me_post_data('like'),
    'insert_or_modify' => give_me_post_data('insert_or_modify')
];


insert($data_to_save);

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Form example</title>
</head>
<body>
    <form action='' method="post">
    <label name="name">Movie title</label><br>
    <input type="text" name="name" value="<?= print_post_data('name') ?>"><br>

    <label name="plot">Plot</label><br>
    <textarea name="plot" cols="30" rows="10"><?= print_post_data('plot') ?></textarea><br>

    <?= select_field('century', [
        '20th' => '20th',
        '21th'=> '21th',
    ], give_me_post_data('century')) ?>
    <br>
   
    <!-- <select name="century">
    <option value="20th">20th</option>
    <option value= "21th" selected>21th</option>
    </select><br> -->

    

    <input type="radio" name="like" value="yes" <?= give_me_post_data('like') == 'Yes' ? 'checked' : '' ?>>
    <label for="like">I liked it</label>
    <input type="radio" name="like" value="kindof" <?= give_me_post_data('like') == 'Kindof' ? 'checked' : '' ?>>
    <label for="like">It was ok</label>
    <input type="radio" name="like" value="no" <?= give_me_post_data('like') == 'No' ? 'checked' : '' ?>>
    <label for="like">I hated it</label><br>


    <input type="checkbox" name="insert_or_modify" value="New" <?= give_me_post_data('insert_or_modify') == 'New' ? 'checked' : '' ?>>
    <label for="insert_or_modify">This is a new movie</label>

    <input type="checkbox" name="insert_or_modify" value="Modify" <?= give_me_post_data('insert_or_modify') == 'Modify' ? 'checked' : '' ?>>
    <label for="insert_or_modify">This is an updated movie</label><br>

    <input type="submit" value="Click here">
    
    </form>
</body>
</html>

<!-- function update_movie($value, $label, $name) {
    if ()
} -->