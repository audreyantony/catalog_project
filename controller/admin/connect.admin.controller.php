<?php

if(isset($_SESSION['id_session'])&&$_SESSION['id_session']===session_id()){
    header('Location: ?admin=home');
    exit();
}

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'connect.admin.model.php';

// CONTROLLER CODE
if (isset($_POST['sign_in'])){
    if (empty($_POST['login']) || empty($_POST['pwd'])) {
        $help = "Please fill all the fields";
    } else {
        $query = au_signInSelect($_POST['login'], $db);
        $result = mysqli_fetch_assoc($query);
        $pwd = mysqli_num_rows($query) > 0 ? password_verify($_POST['pwd'], $result['pwd_user']) : false ;
        if (mysqli_num_rows($query) === 0){
            $help = "This nickname doesn't exist";
        } else if (mysqli_num_rows($query) === 1 && $pwd){
            $_SESSION = $result;
            $_SESSION['id_session'] = session_id();
            header('Location: ?admin=home');
            exit();
        } else if (mysqli_num_rows($query) === 1 && !$pwd){
            $help = "Your password is incorrect";
        } else {
            $help = "Something went wrong, please retry";
        }
    }
}

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'connect.admin.view.php';