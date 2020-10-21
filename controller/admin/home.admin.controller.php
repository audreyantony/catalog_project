<?php

if(!isset($_SESSION['id_session'])|| $_SESSION['id_session']!==session_id()){
    header('Location: ?admin=connect');
    exit();
}

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
$shops = selectAllShops($db);

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.view.php';