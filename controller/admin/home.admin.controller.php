<?php

// REDIRECT IF NOT CONNECTED
if(!isset($_SESSION['id_session'])|| $_SESSION['id_session']!==session_id()){
    header('Location: ?admin=connect');
    exit();
}

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE

// SELECT THE SHOPS
$shops = selectAllShops($db);

// SELECT THE CATEGORIES
$categories = selectAllCategories($db);

// SELECT THE IMAGES
$images = selectAllImages($db);

// SELECT THE PRODUCT
$products = selectAllProductsSmall($db);

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.view.php';