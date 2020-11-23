<?php

// REDIRECT IF NOT CONNECTED
if(!isset($_SESSION['id_session'])|| $_SESSION['id_session']!==session_id()){
    header('Location: ?admin=connect');
    exit();
}

// SWITCH ADMIN
if (isset($_GET['insertshop'])){

include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'shop' . DIRECTORY_SEPARATOR . 'insert.shop.admin.controller.php';

} else if (isset($_GET['deleteshop']) && ctype_digit($_GET['deleteshop'])){

    $pageId = (int) $_GET['deleteshop'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'shop' . DIRECTORY_SEPARATOR . 'delete.shop.admin.controller.php';

} else if (isset($_GET['updateshop']) && ctype_digit($_GET['updateshop'])){

    $pageId = (int) $_GET['updateshop'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'shop' . DIRECTORY_SEPARATOR . 'update.shop.admin.controller.php';

} else if (isset($_GET['insertcategory'])){

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR . 'insert.category.admin.controller.php';

} else if (isset($_GET['deletecategory']) && ctype_digit($_GET['deletecategory'])){

    $pageId = (int) $_GET['deletecategory'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR . 'delete.category.admin.controller.php';

} else if (isset($_GET['updatecategory']) && ctype_digit($_GET['updatecategory'])){

    $pageId = (int) $_GET['updatecategory'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'category' . DIRECTORY_SEPARATOR . 'update.category.admin.controller.php';

} else if (isset($_GET['insertimage'])){

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'insert.image.admin.controller.php';

} else if (isset($_GET['deleteimage']) && ctype_digit($_GET['deleteimage'])){

    $pageId = (int) $_GET['deleteimage'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'delete.image.admin.controller.php';

} else if (isset($_GET['updateimage']) && ctype_digit($_GET['updateimage'])){

    $pageId = (int) $_GET['updateimage'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'update.image.admin.controller.php';

} else if (isset($_GET['insertproduct'])){

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . 'insert.product.admin.controller.php';

} else if (isset($_GET['deleteproduct']) && ctype_digit($_GET['deleteproduct'])){

    $pageId = (int) $_GET['deleteproduct'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . 'delete.product.admin.controller.php';

} else if (isset($_GET['updateproduct']) && ctype_digit($_GET['updateproduct'])){

    $pageId = (int) $_GET['updateproduct'];

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin'. DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR . 'update.product.admin.controller.php';

    // DEFAULT -> ADMIN HOME PAGE
} else {

    header('Location: ?admin=home');
    exit();
}