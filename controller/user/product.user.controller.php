<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'product.user.model.php';

// CONTROLLER CODE

// SELECT THE PRODUCT
$product = selectTheProduct($pageId, $db);
// CHECK THE PRODUCT
$nb = mysqli_num_rows($product);

// IF THE PRODUCT IS ALONE
if($nb===1) {
    $item =  mysqli_fetch_assoc($product);
    $price = $item['discount_product'] ?($item['price_product'] - ($item['price_product'] * ($item['discount_product'] / 100))) . " €  <span>" : $item['price_product'] . " €  ";
}else{
    $error = "Erreur 404";
}

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'product.user.view.php';