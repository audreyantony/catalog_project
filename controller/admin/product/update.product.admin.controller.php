<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
/*$shop = selectTheShop($pageId,$db);

if (isset($_POST['send'])){
    if(!empty($_POST['name']) && !empty($_POST['lat']) && !empty($_POST['long']) && !empty($_POST['street']) && !empty($_POST['pc']) && !empty($_POST['city']) && !empty($_POST['descr'])){

        $update = updateTheShop(clean($_POST['name']), clean($_POST['lat']), clean($_POST['long']), clean($_POST['street']), clean($_POST['pc']), clean($_POST['city']), clean($_POST['descr']), $pageId, $db);

        if ($update){
            $shop = selectTheShop($pageId,$db);
            $win = "The update went through !";
        } else {
            $help = "Something went wrong";
        }
    } else {
        $help = "All fields needs to by filled";
    }
}*/

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'update.product.admin.view.php';