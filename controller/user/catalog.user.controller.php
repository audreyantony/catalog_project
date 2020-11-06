<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'catalog.user.model.php';

// CONTROLLER CODE

$category = selectAllCategory($db);

$maxPrice = selectMaxPrice($db);

$productByPage = 6;

$url = "";

if (isset($_GET['search']) && $_GET['search'] === "yes"){
    $arrayCategory = [];
    if (!empty($_GET['category'])) {
        $i = 0;
        foreach ($_GET['category'] as $cat) {
            $arrayCategory[$i] = $cat;
            $i++;
        }
    }

    $min = empty($_GET['minimum']) ? 0 : $_GET['minimum'];
    $max = empty($_GET['maximum']) ? $maxPrice['price_product'] : $_GET['maximum'];

    $currentPage = isset($_GET['catalog']) ? $_GET['catalog'] : 1;


    foreach ($arrayCategory as $cat){
        $url .= "&category[".$cat."]=".$cat;
    }
    $url .= "&minimum=".$min."&maximum=".$max."&search=yes";

    $someProducts = selectTotalSomeProducts($min, $max, $arrayCategory,$db);
    $product = selectSomeProducts($min, $max, $arrayCategory, $productByPage, $currentPage, $db);
    $productNumber = mysqli_num_rows($someProducts);

} else {

    $currentPage = isset($_GET['catalog']) ? $_GET['catalog'] : 1;

    $allProducts = selectTotalProducts($db);
    $product = selectAllProducts($productByPage, $currentPage, $db);
    $productNumber = mysqli_num_rows($allProducts);
}



// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'catalog.user.view.php';