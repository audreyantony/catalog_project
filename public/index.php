<?php

// SESSION START
session_start();

// DB CONNEXION FILES
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bin' . DIRECTORY_SEPARATOR . 'config.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'DBconnect.model.php';

// DB CONNEXION
$db = DBconnect();

if (!isset($_GET['page'])) {

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.controller.php';

} else {
    switch ($_GET['page']) {
        case 'home':
            include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.controller.php';
            break;
        case "about.us":
            include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'aboutus.user.controller.php';
            break;
        case "catalog":
            include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'catalog.user.controller.php';
            break;
        case "contact":
            include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'contact.user.controller.php';
            break;
        default :
            include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . '404.user.controller.php';
    }

    if(isset($_SESSION['session_id'])&&$_SESSION['session_id'] === session_id()) {
        switch ($_GET['page']) {
            case 'admin':
                include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.controller.php';
                break;
            default :
                include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . '404.user.controller.php';
        }
    }
}
