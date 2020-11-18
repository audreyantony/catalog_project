<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'catalog.user.model.php';

// CONTROLLER CODE

// CATEGORIES FOR SEARCH BAR
$category = selectAllCategory($db);

// MAX PRICE FOR SEARCH BAR
$maxPrice = selectMaxPrice($db);

// PRODUCTS WANTED BY PAGE
$productByPage = 6;

$url = "";

// GLOBAL VUE WITH SEARCH
if (isset($_GET['search']) && $_GET['search'] === "yes"){

    // CATEGORY(IES)
    $arrayCategory = [];
    if (!empty($_GET['category'])) {
        $i = 0;
        foreach ($_GET['category'] as $cat) {
            $arrayCategory[$i] = $cat;
            $i++;
        }
    }

    // MIN AND MAX VALUES
    $min = empty($_GET['minimum']) ? 0 : $_GET['minimum'];
    $max = empty($_GET['maximum']) ? $maxPrice['price_product'] : $_GET['maximum'];

    // CURRENT PAGE
    $currentPage = isset($_GET['catalog']) ? $_GET['catalog'] : 1;

    // URL WRITING
    foreach ($arrayCategory as $cat){
        $url .= "&category[".$cat."]=".$cat;
    }
    $url .= "&minimum=".$min."&maximum=".$max."&search=yes";

    $someProducts = selectTotalSomeProducts($min, $max, $arrayCategory,$db);
    $product = selectSomeProducts($min, $max, $arrayCategory, $productByPage, $currentPage, $db);
    $productNumber = mysqli_num_rows($someProducts);

    // NORMAL GLOBAL VUE
} else {

    // CURRENT PAGE
    $currentPage = isset($_GET['catalog']) ? $_GET['catalog'] : 1;

    $allProducts = selectTotalProducts($db);
    $product = selectAllProducts($productByPage, $currentPage, $db);
    $productNumber = mysqli_num_rows($allProducts);
}

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'catalog.user.view.php';