<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
$img = selectTheImage($pageId,$db);

if (isset($_POST['send'])){
    if(!empty($_POST['alt'])){
        if (!empty($_POST['name'])){
            $update = updateTheImage(clean($_POST['name']), clean($_POST['alt']), $pageId, $db);

            if ($update){
                $img = selectTheImage($pageId,$db);
                $win = "The update went through !";
            } else {
                $help = "Something went wrong";
            }
        } else {
            $update = updateTheImageAlt(clean($_POST['alt']), $pageId, $db);

            if ($update){
                $img = selectTheImage($pageId,$db);
                $win = "The update went through !";
            } else {
                $help = "Something went wrong";
            }
        }

    } else {
        $help = "All fields needs to by filled";
    }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'update.image.admin.view.php';
