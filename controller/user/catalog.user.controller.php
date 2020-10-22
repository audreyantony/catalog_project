<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'catalog.user.model.php';

// CONTROLLER CODE
$product = selectAllProducts($db);

if (isset($_GET['catalog'])){
    $currentPage = $_GET['catalog'];
} else {
    $currentPage = 1;
}

$productNumber = mysqli_num_rows($product);
$productByPage = 6;


$query = "SELECT *, LEFT(description_product, 60) AS descr FROM product LIMIT ".$productByPage." OFFSET ".(($currentPage-1)*$productByPage).";";
$result = mysqli_query($db, $query);

while ($truc = mysqli_fetch_assoc($result)){
    echo $truc['name_product']."<br>";
}

echo pagination($productNumber, $currentPage,6);

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'catalog.user.view.php';