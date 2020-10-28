<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE


$category = selectAllCategories($db);

$image = selectAllImages($db);

if (isset($_POST['insert'])){


    if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price']) && isset($_POST['discount']) && isset($_POST['end']) && isset($_POST['promoted']) && isset($_POST['stock']) && isset($_POST['category']) && isset($_POST['image'])){

        $insert = insertTheProduct(clean($_POST['name']), clean($_POST['description']), clean($_POST['price']), clean($_POST['discount']), clean($_POST['end']), clean($_POST['promoted']), clean($_POST['stock']), clean($_POST['category']), clean($_POST['image']), $db);

        if ($insert){
            $win = "We have a new product ! (It'll be on the home page)";
        } else {
            $help = "Something went wrong";
        }
    } else {
        $help = "All fields needs to by filled";
    }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'insert.product.admin.view.php';