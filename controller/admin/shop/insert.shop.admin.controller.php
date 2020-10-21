<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
if (isset($_POST['insert'])){

    if(!empty($_POST['name']) && !empty($_POST['lat']) && !empty($_POST['long']) && !empty($_POST['street']) && !empty($_POST['pc']) && !empty($_POST['city']) && !empty($_POST['descr'])){

        $insert = insertTheShop(clean($_POST['name']), clean($_POST['lat']), clean($_POST['long']), clean($_POST['street']), clean($_POST['pc']), clean($_POST['city']), clean($_POST['descr']), $db);

        if ($insert){
            $win = "We have a new shop ! (It'll be on the home page)";
        } else {
            $help = "Something went wrong";
        }
    } else {
        $help = "All fields needs to by filled";
    }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'insert.shop.admin.view.php';