<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
$category = selectAllCategories($db);

$image = selectAllImages($db);

if (isset($_POST['insert'])){

    echo $_POST['name']."<br>";
    echo $_POST['description']."<br>";
    echo $_POST['price']."<br>";
    echo $_POST['discount']."<br>";
    echo $_POST['end']."<br>";
    echo $_POST['promoted']."<br>";
    echo $_POST['stock']."<br>";
    echo $_POST['category']."<br>";
    echo $_POST['image']."<br>";

    /*if(!empty($_POST['name']) && !empty($_POST['lat']) && !empty($_POST['long']) && !empty($_POST['street']) && !empty($_POST['pc']) && !empty($_POST['city']) && !empty($_POST['descr'])){

        $insert = insertTheShop(clean($_POST['name']), clean($_POST['lat']), clean($_POST['long']), clean($_POST['street']), clean($_POST['pc']), clean($_POST['city']), clean($_POST['descr']), $db);

        if ($insert){
            $win = "We have a new shop ! (It'll be on the home page)";
        } else {
            $help = "Something went wrong";
        }
    } else {
        $help = "All fields needs to by filled";
    }*/
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'insert.product.admin.view.php';