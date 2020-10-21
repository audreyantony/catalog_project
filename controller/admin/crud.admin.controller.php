<?php

if(!isset($_SESSION['id_session'])|| $_SESSION['id_session']!==session_id()){
    header('Location: ?admin=connect');
    exit();
}

if (isset($_GET['insertshop'])){

include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'shop' . DIRECTORY_SEPARATOR . 'insert.shop.admin.controller.php';

} else if (isset($_GET['deleteshop']) && ctype_digit($_GET['deleteshop'])){

    $pageId = (int) $_GET['deleteshop'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'shop' . DIRECTORY_SEPARATOR . 'delete.shop.admin.controller.php';

} else if (isset($_GET['updateshop']) && ctype_digit($_GET['updateshop'])){

    $pageId = (int) $_GET['updateshop'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'shop' . DIRECTORY_SEPARATOR . 'update.shop.admin.controller.php';

} else {

    header('Location: ?admin=home');
    exit();
}