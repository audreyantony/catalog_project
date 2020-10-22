<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
if (isset($_POST['insert'])) {

    if (!empty($_POST['name'])) {

        $insert = insertTheCategory(clean($_POST['name']), $db);

        if ($insert) {
            $win = "We have a new category ! (It'll be on the home page)";
        } else {
            $help = "Something went wrong";
        }
    } else {
        $help = "All fields needs to by filled";
    }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'insert.category.admin.view.php';