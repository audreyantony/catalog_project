<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
$shop = selectTheShop($pageId, $db);

if(isset($_GET['confirm'])){
    $delete = deleteTheShop($pageId, $db);
    if ($delete){
        header('Location: ?admin=home');
        exit();
    } else {
        $help = "Something went wrong";
    }

}


// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'delete.shop.admin.view.php';