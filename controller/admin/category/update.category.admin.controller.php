<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
$category = selectTheCategory($pageId,$db);

if (isset($_POST['send'])){
    if(!empty($_POST['name'])){

        $update = updateTheCategory(clean($_POST['name']), $pageId, $db);

        if ($update){
            $category = selectTheCategory($pageId,$db);
            $win = "The update went through !";
        } else {
            $help = "Something went wrong";
        }
    } else {
        $help = "All fields needs to by filled";
    }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'update.category.admin.view.php';