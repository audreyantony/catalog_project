<?php

function selectAllProducts($db){
    $query = "SELECT *, LEFT(description_product, 60) AS descr FROM product ORDER BY description_product DESC;";
    return mysqli_query($db, $query);
}

function selectImgProducts($id, $db){
    $query = "SELECT id_product, name_img, alt_img FROM product JOIN product_has_img ON id_product = product_id_product_has_img JOIN img ON img_id_product_has_img = id_img WHERE id_product = ".$id." LIMIT 1;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

function selectCategoryProducts($id, $db){
    $query = "SELECT id_product, name_category FROM product JOIN product_has_category ON id_product = product_id_product JOIN category ON category_id_category = id_category WHERE id_product = ".$id.";";
    return mysqli_query($db, $query);
}