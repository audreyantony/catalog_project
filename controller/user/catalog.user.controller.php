<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'catalog.user.model.php';

// CONTROLLER CODE

$category = selectAllCategory($db);

if (isset($_GET['catalog'])){
    $currentPage = $_GET['catalog'];
} else {
    $currentPage = 1;
}

$productByPage = 6;
$allProducts = selectTotalProducts($db);
$product = selectAllProducts($productByPage, $currentPage, $db);
$productNumber = mysqli_num_rows($allProducts);

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'catalog.user.view.php';