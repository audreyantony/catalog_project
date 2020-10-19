<?php

// SESSION START
session_start();

// DB CONNEXION FILES
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bin' . DIRECTORY_SEPARATOR . 'config.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'DBconnect.model.php';

// DB CONNEXION
$db = DBconnect();

if (!isset($_GET['page']) && !isset($_GET['admin']) && !isset($_GET['product'])) {

    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'header.view.php';

    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.controller.php';

    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'footer.view.php';

} else {

    if (isset($_GET['page'])) {

        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'header.view.php';

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

        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'footer.view.php';

    } else if (isset($_GET['admin'])) {
        switch ($_GET['admin']) {
            case "connect":
                include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'connect.admin.controller.php';
                break;
            case "disconnect":
                include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'disconnect.admin.controller.php';
                break;
            case 'admin':
                include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.controller.php';
                break;
            default :
                include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . '404.user.controller.php';
        }

    } else if(isset($_GET['product']) && ctype_digit($_GET['product'])){

        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'header.view.php';

        $pageId = (int) $_GET['product'];

        include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'product.user.controller.php';

        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'footer.view.php';

    }
}