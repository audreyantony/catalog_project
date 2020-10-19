<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'product.user.model.php';

// CONTROLLER CODE
$query = selectProductData($db, $pageId);
$nb = mysqli_num_rows($query);

if($nb===1) {
    $item =  mysqli_fetch_assoc($query);
}else{
    $error = "Error 404 : Page not found";
}

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'product.user.view.php';