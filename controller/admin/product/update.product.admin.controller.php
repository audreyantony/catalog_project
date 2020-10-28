<?php

// CALLING MODEL
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'admin.model.php';

// CONTROLLER CODE
$product = selectTheProduct($pageId,$db);

$category = selectAllCategories($db);

$image = selectAllImages($db);

if (isset($categoryIdToDelete)){
    echo "oui";
    $delete = deleteProductAndCategory($pageId, $_GET['deletecategory'], $db);
}

if (isset($_POST['submitCat'])){
    if(!empty($_POST['cat'])){

        $update = AddProductCategory(clean($_POST['cat']), $pageId, $db);

        if ($update){
            $product = selectTheProduct($pageId,$db);
            $winCat = "The update went through !";
        } else {
            $helpCat = "Something went wrong";
        }
    } else {
        $helpCat = "All fields needs to by filled";
    }
}

if (isset($_POST['submitImage'])){
    if(!empty($_POST['image'])){

        $update = AddProductImage(clean($_POST['image']), $pageId, $db);

        if ($update){
            $product = selectTheProduct($pageId,$db);
            $winImg = "The update went through !";
        } else {
            $helpImg = "Something went wrong";
        }
    } else {
        $helpImg = "All fields needs to by filled";
    }
}

if (isset($_POST['send'])){

    if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price']) && isset($_POST['discount']) && isset($_POST['end']) && isset($_POST['promoted']) && isset($_POST['stock'])){

        $update = updateTheProduct(clean($_POST['name']), clean($_POST['description']), clean($_POST['price']), clean($_POST['discount']), clean($_POST['end']), clean($_POST['promoted']), clean($_POST['stock']), $pageId, $db);

    echo $_POST['name']."<br>";
    echo $_POST['description']."<br>";
    echo $_POST['price']."<br>";
    echo $_POST['discount']."<br>";
    echo $_POST['end']."<br>";
    echo $_POST['promoted']."<br>";
    echo $_POST['stock']."<br>";

        if ($update){
            $product = selectTheProduct($pageId,$db);
            $win = "The update went through !";
        } else {
            $help = "Something went wrong";
        }
    } else {
        $help = "All fields needs to by filled";
    }
}

// CALLING VIEW
include dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'update.product.admin.view.php';