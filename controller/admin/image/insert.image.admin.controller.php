<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
if (isset($_POST['insert'])) {

    if (!empty($_FILES['file']) && !empty($_POST['alt'])) {

       $insert = insertTheImage($_FILES['file'], clean($_POST['alt']), $db,IMG_FORMAT,IMG_MAX_SIZE,IMG_UPLOAD,IMG_WIDTH,IMG_HEIGHT, QUALITY_JPG);

       if ($insert) {
           $win = "We have a new image ! (It'll be on the home page)";
       } else {
           $help = "Something went wrong";
       }
   } else {
       $help = "All fields needs to by filled";
   }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'insert.image.admin.view.php';