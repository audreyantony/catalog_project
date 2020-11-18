<?php

// CLEARANCE PRODUCTS (3)
function fetchClearance($db){
    $query = "SELECT
    id_product,
    price_product,
    LEFT(name_product, 25) AS name,
    discount_product AS discount,
    discount_end_date_product AS end,
    GROUP_CONCAT(
        DISTINCT img.name_img SEPARATOR 'µµ'
    ) AS img,
    GROUP_CONCAT(
        DISTINCT img.alt_img SEPARATOR 'µµ'
    ) AS alt
FROM
    product
JOIN product_has_img ON id_product = product_id_product_has_img
JOIN img ON img_id_product_has_img = id_img
WHERE
    discount_product > 0
GROUP BY
    id_product
LIMIT 3";
    return mysqli_query($db, $query);
}

// PRODUCT OF THE DAY (1)
function fetchPOTD($db){
    $query = "SELECT id_product, name_product as name, 
    LEFT(description_product, 33) as descr,
    GROUP_CONCAT(
        DISTINCT img.name_img SEPARATOR 'µµ'
    ) AS img,
    GROUP_CONCAT(
        DISTINCT img.alt_img SEPARATOR 'µµ'
    ) AS alt
FROM
    product
JOIN product_has_img ON id_product = product_id_product_has_img
JOIN img ON img_id_product_has_img = id_img
    WHERE promoted_product = 1 
    GROUP BY id_product
    LIMIT 1;";
    return mysqli_query($db, $query);
}

// DATE DIFFERENCE FOR PRODUCTS IN CLEARANCE SECTION
function dateDiff($start, $end){
    $diff = abs($start - $end);
    $days = array();

    $tmp = $diff;
    $days['second'] = $tmp % 60;

    $tmp = floor( ($tmp - $days['second']) /60 );
    $days['minute'] = $tmp % 60;

    $tmp = floor( ($tmp - $days['minute'])/60 );
    $days['hour'] = $tmp % 24;

    $tmp = floor( ($tmp - $days['hour'])  /24 );
    $days['day'] = $tmp;

    return $days;
}