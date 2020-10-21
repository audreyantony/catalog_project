<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
$shop = selectTheShop($pageId,$db);

if (isset($_POST['send'])){
    if(!empty($_POST['name']) && !empty($_POST['loca']) && !empty($_POST['street']) && !empty($_POST['pc']) && !empty($_POST['city']) && !empty($_POST['desc'])){

        $update = updateTheShop(clean($_POST['name']), clean($_POST['loca']), clean($_POST['street']), clean($_POST['pc']), clean($_POST['city']), clean($_POST['desc']), $pageId, $db);


    } else {
        $help = "All fields needs to by filled";
    }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'update.shop.admin.view.php';