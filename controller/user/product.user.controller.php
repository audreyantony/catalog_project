<?php

// CALLING MODEL

// CONTROLLER CODE
$sql = 'SELECT * FROM product INNER JOIN product_has_category ON product.id_product = product_has_category.product_id_product INNER JOIN category ON category.id_category = product_has_category.category_id_category WHERE product.id_product = "'.$pageId.'";';
$requete = mysqli_query($db,$sql);
$nb = mysqli_num_rows($requete);

if($nb===1) {
    $item =  mysqli_fetch_assoc($requete);

}else{
    $titre = "Erreur 404";
}

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'product.user.view.php';