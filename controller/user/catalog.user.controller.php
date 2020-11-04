<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'catalog.user.model.php';

// CONTROLLER CODE

$category = selectAllCategory($db);

$maxPrice = selectMaxPrice($db);

$productByPage = 6;

if (isset($_GET['search'])){
    header("Location : index.php?page=catalog&catalog=4&search=on&");
}

/*if (isset($_GET['search'])){
    $arrayCategory = [];
    if (!empty($_GET['category'])){
        $i=0;
        foreach ($_GET['category'] as $cat){
            $arrayCategory[$i]= $cat;
            $i++;
        }
    }
    if (empty($_GET['minimum'])){
        $min = 0;
    } else {
        $min = $_GET['minimum'];
    }
    if (empty($_GET['maximum'])){
        $max = $maxPrice['price_product'];
    } else {
        $max = $_GET['maximum'];
    }

    if (isset($_GET['catalog'])){
        $currentPage = $_GET['catalog'];
    } else {
        $currentPage = 1;
    }

    $someProducts = selectTotalSomeProducts($min, $max, $arrayCategory,$db);
    $product = selectSomeProducts($min, $max, $arrayCategory, $productByPage, $currentPage, $db);
    $productNumber = mysqli_num_rows($someProducts);

} else {*/

    if (isset($_GET['catalog'])){
        $currentPage = $_GET['catalog'];
    } else {
        $currentPage = 1;
    }

    $allProducts = selectTotalProducts($db);
    $product = selectAllProducts($productByPage, $currentPage, $db);
    $productNumber = mysqli_num_rows($allProducts);
//}



// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'catalog.user.view.php';