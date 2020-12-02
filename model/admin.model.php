<?php

// ENTRY CLEANING
function clean($item)
{
    return htmlspecialchars(strip_tags(trim($item)));
}

// SELECT ALL SHOPS
function selectAllShops($db)
{
    $query = "SELECT * FROM shop ORDER BY id_shop ASC";
    return mysqli_query($db, $query);
}

// SELECT THE SHOP
function selectTheShop($id, $db)
{
    $query = "SELECT * FROM shop WHERE id_shop = " . $id . ";";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

// SHOP UPDATE
function updateTheShop($name, $lat, $long, $street, $postcode, $city, $descr, $id, $db)
{
    $query = 'UPDATE shop SET name_shop = "' . $name . '", lat_shop = "' . $lat . '", long_shop = "' . $long . '", street_shop = "' . $street . '", post_code_shop = "' . $postcode . '", city_shop = "' . $city . '", description_shop = "' . $descr . '" WHERE id_shop = ' . $id . ';';
    return mysqli_query($db, $query);
}

// SHOP INSERTION
function insertTheShop($name, $lat, $long, $street, $postcode, $city, $descr, $db)
{
    $query = 'INSERT INTO shop (name_shop, lat_shop, long_shop, street_shop, post_code_shop, city_shop, description_shop) VALUES ("' . $name . '", "' . $lat . '", "' . $long . '", "' . $street . '", "' . $postcode . '", "' . $city . '", "' . $descr . '");';
    return mysqli_query($db, $query);
}

// SHOP DELETION
function deleteTheShop($id, $db)
{
    $query = "DELETE FROM shop WHERE id_shop = " . $id . ";";
    return mysqli_query($db, $query);
}

// SELECT ALL CATEGORIES
function selectAllCategories($db)
{
    $query = "SELECT * FROM category ORDER BY id_category ASC";
    return mysqli_query($db, $query);
}

// SELECT THE CATEGORY
function selectTheCategory($id, $db)
{
    $query = "SELECT * FROM category WHERE id_category = " . $id . ";";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

// CATEGORY UPDATE
function updateTheCategory($name, $id, $db)
{
    $query = 'UPDATE category SET name_category = "' . $name . '" WHERE id_category = ' . $id . ';';
    return mysqli_query($db, $query);
}

// CATEGORY INSERTION
function insertTheCategory($name, $db)
{
    $query = 'INSERT INTO category (name_category) VALUES ("' . $name . '");';
    return mysqli_query($db, $query);
}

// CATEGORY DELETION
function deleteTheCategory($id, $db)
{
    mysqli_begin_transaction($db);
    $query = mysqli_query($db, "DELETE FROM product_has_category WHERE category_id_category = " . $id . ";");
    $query2 = mysqli_query($db, "DELETE FROM category WHERE id_category = " . $id . ";");
    if ($query && $query2) {
        mysqli_commit($db);
        return true;
    } else {
        mysqli_rollback($db);
        return false;
    }
}

// SELECT ALL IMG
function selectAllImages($db)
{
    $query = "SELECT * FROM img ORDER BY id_img ASC";
    return mysqli_query($db, $query);
}

// SELECT THE IMG
function selectTheImage($id, $db)
{
    $query = "SELECT * FROM img WHERE id_img = " . $id . ";";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

// IMG NAME UPDATE
function updateTheImage($name, $alt, $id, $db)
{
    $query = 'UPDATE img SET name_img = "products/' . $name . '", alt_img = "' . $alt . '" WHERE id_img = ' . $id . ';';
    return mysqli_query($db, $query);
}

// IMG ALT UPDATE
function updateTheImageAlt($alt, $id, $db)
{
    $query = 'UPDATE img SET alt_img = "' . $alt . '" WHERE id_img = ' . $id . ';';
    return mysqli_query($db, $query);
}

// IMG INSERTION
function insertTheImage($name, $alt, $db, $img_format, $img_max_size, $img_upload, $img_width, $img_height, $quality_jpg)
{
    $dateInName = date("YmdHis");

    if ($name['error'] == 0) {
        $fileExtend = verifExtendImg($name['name'], $img_format);
        if ($fileExtend) {
            $imgSize = verifSizeImg($name['size'], $img_max_size);
            if ($imgSize) {
                $newFileName = $dateInName . $name['name'];
                if (move_uploaded_file($name['tmp_name'], $img_upload . $newFileName)) {
                    $query = 'INSERT INTO img (name_img, alt_img) VALUES ("products/' . $newFileName . '", "' . $alt . '");';
                    return mysqli_query($db, $query);
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

// IMG DELETION
function deleteTheImage($id, $db)
{
    mysqli_begin_transaction($db);
    $query = mysqli_query($db, "DELETE FROM product_has_img WHERE img_id_product_has_img = " . $id . ";");
    $query2 = mysqli_query($db, "DELETE FROM img WHERE id_img = " . $id . ";");
    if ($query && $query2) {
        mysqli_commit($db);
        return true;
    } else {
        mysqli_rollback($db);
        return false;
    }
}

// SELECT ALL PRODUCTS BUT SMALL VERSION
function selectAllProductsSmall($db)
{
    $query = "
    SELECT DISTINCT p.id_product AS id_product,
                    p.name_product, LEFT(description_product, 90) AS description_product,
                    p.price_product, p.discount_product, p.discount_end_date_product, 
                    p.promoted_product, p.instock_product, p.discount_start_date_product, 
                    GROUP_CONCAT( DISTINCT img.name_img SEPARATOR 'µµ') AS name_img, 
                    GROUP_CONCAT( DISTINCT img.alt_img SEPARATOR 'µµ') AS alt_img ,
                    GROUP_CONCAT(DISTINCT category.name_category SEPARATOR 'µµ') AS name_category 
    FROM product AS p 
        JOIN product_has_img ON id_product = product_id_product_has_img 
        JOIN img ON img_id_product_has_img = id_img 
        JOIN product_has_category ON id_product = product_id_product 
        JOIN category ON category_id_category = id_category 
    GROUP BY id_product 
    ORDER BY p.id_product ASC ;";
    return mysqli_query($db, $query);
}

// SELECT ALL PRODUCTS FULL VERSION
function selectTheProduct($id, $db)
{
    $query = "SELECT DISTINCT p.id_product AS id_product,
                    p.name_product, p.description_product,
                    p.price_product, p.discount_product, p.discount_end_date_product, 
                    p.promoted_product, p.instock_product, p.discount_start_date_product, 
                    GROUP_CONCAT( DISTINCT img.name_img SEPARATOR 'µµ') AS name_img, 
                    GROUP_CONCAT( DISTINCT img.alt_img SEPARATOR 'µµ') AS alt_img ,
                    GROUP_CONCAT( DISTINCT img.id_img SEPARATOR 'µµ') AS id_img ,
                    GROUP_CONCAT(DISTINCT category.name_category SEPARATOR 'µµ') AS name_category,
                    GROUP_CONCAT(DISTINCT category.id_category SEPARATOR 'µµ') AS id_category
    FROM product AS p 
        JOIN product_has_img ON id_product = product_id_product_has_img 
        JOIN img ON img_id_product_has_img = id_img 
        JOIN product_has_category ON id_product = product_id_product 
        JOIN category ON category_id_category = id_category 
    WHERE id_product = " . $id . "
    GROUP BY id_product ;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

// PRODUCT DELETION
function deleteTheProduct($id, $db)
{
    mysqli_begin_transaction($db);
    $query = mysqli_query($db, "DELETE FROM product_has_img WHERE product_id_product_has_img = " . $id . ";");
    $query2 = mysqli_query($db, "DELETE FROM product_has_category WHERE product_id_product = " . $id . ";");
    $query3 = mysqli_query($db, "DELETE FROM product WHERE id_product = " . $id . ";");
    if ($query && $query2 && $query3) {
        mysqli_commit($db);
        return true;
    } else {
        mysqli_rollback($db);
        return false;
    }
}

// PRODUCT INSERTION
function insertTheProduct($name, $descr, $price, $discount, $end, $promoted, $stock, $cat, $img, $db)
{
    if ($end === '') {
        $end = 0;
    }
    $now = date('Y-m-d H:i:s');
    $timeEnd = date('Y-m-d H:i:s', strtotime("+$end days", strtotime($now)));

    mysqli_begin_transaction($db);

    $product = mysqli_query($db, "INSERT INTO product (name_product, description_product, price_product, discount_product, discount_end_date_product, promoted_product, instock_product) VALUES ('" . $name . "','" . $descr . "','" . $price . "','" . $discount . "','" . $timeEnd . "','" . $promoted . "','" . $stock . "');");
    $idProduct = mysqli_insert_id($db);
    $productImg = mysqli_query($db, "INSERT INTO product_has_img (product_id_product_has_img, img_id_product_has_img) VALUES ( " . $idProduct . ", " . $img . ");");
    $productCat = mysqli_query($db, "INSERT INTO product_has_category (product_id_product, category_id_category) VALUES ( " . $idProduct . ", " . $cat . ");");

    if ($product && $productImg && $productCat) {
        mysqli_commit($db);
        return true;
    } else {
        mysqli_rollback($db);
        return false;
    }
}

// DELETION OF A PRODUCT CATEGORY
function deleteProductAndCategory($productId, $categoryId, $db)
{
    $query = "DELETE FROM product_has_category WHERE product_has_category.product_id_product = " . $productId . " AND product_has_category.category_id_category = " . $categoryId . ";";
    return mysqli_query($db, $query);
}

// DELETION OF A PRODUCT IMG
function deleteProductAndImage($productId, $imgId, $db)
{
    $query = "DELETE FROM product_has_img WHERE product_has_img.product_id_product_has_img = " . $productId . " AND product_has_img.img_id_product_has_img = " . $imgId . ";";
    return mysqli_query($db, $query);
}

// INSERTION OF A PRODUCT CATEGORY
function AddProductCategory($catId, $prodId, $db)
{
    $query = "INSERT INTO product_has_category (product_id_product, category_id_category) VALUES (" . $prodId . ", " . $catId . ");";
    return mysqli_query($db, $query);
}

// INSERTION OF A PRODUCT IMG
function AddProductImage($imgId, $prodId, $db)
{
    $query = "INSERT INTO product_has_img (product_id_product_has_img, img_id_product_has_img) VALUES (" . $prodId . ", " . $imgId . ");";
    return mysqli_query($db, $query);
}

// PRODUCT UPDATE
function updateTheProduct($name, $description, $price, $discount, $end, $promoted, $stock, $id, $db)
{
    if ($end === '') {
        $end = 0;
    }
    $now = date('Y-m-d H:i:s');
    $timeEnd = date('Y-m-d H:i:s', strtotime("+$end days", strtotime($now)));

    $query = "UPDATE product SET name_product = '" . $name . "', description_product = '" . $description . "', price_product = '" . $price . "', discount_product = '" . $discount . "', discount_end_date_product = '" . $timeEnd . "', promoted_product = '" . $promoted . "', instock_product = '" . $stock . "' WHERE id_product = " . $id . ";";

    return mysqli_query($db, $query);
}

// FUNCTION FOR $_FILES CHECK

function verifExtendImg($name, $format)
{
    $stringName = strrchr($name, ".");
    $extendToVerify = strtolower($stringName);
    if (in_array($extendToVerify, $format)) {
        return $extendToVerify;
    } else {
        return false;
    }
}

function verifSizeImg($imgSize, $maxImgSize)
{
    ;
    if ($imgSize > $maxImgSize) {
        return false;
    } else {
        return $imgSize;
    }
}
