<?php

function clean($item){
    return htmlspecialchars(strip_tags(trim($item)));
}

function selectAllShops($db){
    $query = "SELECT * FROM shop ORDER BY id_shop ASC";
    return mysqli_query($db,$query);
}

function selectTheShop($id, $db){
    $query = "SELECT * FROM shop WHERE id_shop = ".$id.";";
    $result = mysqli_query($db,$query);
    return mysqli_fetch_assoc($result);
}

function updateTheShop($name, $lat, $long, $street, $postcode, $city, $descr, $id, $db){
    $query = 'UPDATE shop SET name_shop = "'.$name.'", lat_shop = "'.$lat.'", long_shop = "'.$long.'", street_shop = "'.$street.'", post_code_shop = "'.$postcode.'", city_shop = "'.$city.'", description_shop = "'.$descr.'" WHERE id_shop = '.$id.';';
    return mysqli_query($db, $query);
}

function insertTheShop($name, $lat, $long, $street, $postcode, $city, $descr, $db){
    $query = 'INSERT INTO shop (name_shop, lat_shop, long_shop, street_shop, post_code_shop, city_shop, description_shop) VALUES ("'.$name.'", "'.$lat.'", "'.$long.'", "'.$street.'", "'.$postcode.'", "'.$city.'", "'.$descr.'");';
    return mysqli_query($db, $query);
}

function  deleteTheShop($id, $db){
    $query = "DELETE FROM shop WHERE id_shop = ".$id.";";
    return mysqli_query($db,$query);
}

function selectAllCategories($db){
    $query = "SELECT * FROM category ORDER BY id_category ASC";
    return mysqli_query($db,$query);
}

function selectTheCategory($id,$db){
    $query = "SELECT * FROM category WHERE id_category = ".$id.";";
    $result = mysqli_query($db,$query);
    return mysqli_fetch_assoc($result);
}

function updateTheCategory($name, $id, $db){
    $query = 'UPDATE category SET name_category = "'.$name.'" WHERE id_category = '.$id.';';
    return mysqli_query($db, $query);
}

function insertTheCategory($name, $db){
    $query = 'INSERT INTO category (name_category) VALUES ("'.$name.'");';
    return mysqli_query($db, $query);
}

function deleteTheCategory($id, $db){
    mysqli_begin_transaction($db);
    $query = mysqli_query($db, "DELETE FROM product_has_category WHERE category_id_category = ".$id.";");
    $query2 = mysqli_query($db,"DELETE FROM category WHERE id_category = ".$id.";");
    if ($query && $query2){
        mysqli_commit($db);
        return true;
    } else {
        mysqli_rollback($db);
        return false;
    }
}

function selectAllImages($db){
    $query = "SELECT * FROM img ORDER BY id_img ASC";
    return mysqli_query($db,$query);
}

function selectTheImage($id,$db){
    $query = "SELECT * FROM img WHERE id_img = ".$id.";";
    $result = mysqli_query($db,$query);
    return mysqli_fetch_assoc($result);
}

function updateTheImage($name, $alt, $id, $db){
    $query = 'UPDATE img SET name_img = "products/'.$name.'", alt_img = "'.$alt.'" WHERE id_img = '.$id.';';
    return mysqli_query($db, $query);
}

function updateTheImageAlt($alt, $id, $db){
    $query = 'UPDATE img SET alt_img = "'.$alt.'" WHERE id_img = '.$id.';';
    return mysqli_query($db, $query);
}

function insertTheImage($name, $alt, $db){
    $query = 'INSERT INTO img (name_img, alt_img) VALUES ("products/'.$name.'", "'.$alt.'");';
    return mysqli_query($db, $query);
}

function deleteTheImage($id, $db){
    mysqli_begin_transaction($db);
    $query = mysqli_query($db, "DELETE FROM product_has_img WHERE img_id_product_has_img = ".$id.";");
    $query2 = mysqli_query($db,"DELETE FROM img WHERE id_img = ".$id.";");
    if ($query && $query2){
        mysqli_commit($db);
        return true;
    } else {
        mysqli_rollback($db);
        return false;
    }
}

function selectAllProductsSmall($db) {
    $query = "SELECT *, LEFT(description_product, 80) AS description_product FROM product ORDER BY id_product ASC;";
    return mysqli_query($db,$query);
}

function selectTheProduct($id, $db){
    $query = "SELECT * FROM product WHERE id_product = ".$id.";";
    $result = mysqli_query($db,$query);
    return mysqli_fetch_assoc($result);
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

function deleteTheProduct($id, $db){
    mysqli_begin_transaction($db);
    $query = mysqli_query($db, "DELETE FROM product_has_img WHERE product_id_product_has_img = ". $id .";");
    $query2 = mysqli_query($db,"DELETE FROM producthas_category WHERE product_id_product = ".$id.";");
    $query3 = mysqli_query($db,"DELETE FROM product WHERE id_product = ".$id.";");
    if ($query && $query2 && $query3){
        mysqli_commit($db);
        return true;
    } else {
        mysqli_rollback($db);
        return false;
    }
}