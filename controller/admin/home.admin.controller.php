<?php

if(!isset($_SESSION['id_session'])|| $_SESSION['id_session']!==session_id()){
    header('Location: ?admin=connect');
    exit();
}

// CALLING MODEL


// CONTROLLER CODE

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.view.php';