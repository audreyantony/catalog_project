<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'product.user.model.php';

// CONTROLLER CODE
$product = selectTheProduct($pageId, $db);
$nb = mysqli_num_rows($product);

if($nb===1) {
    $item =  mysqli_fetch_assoc($product);
}else{
    $titre = "Erreur 404";
}

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'product.user.view.php';