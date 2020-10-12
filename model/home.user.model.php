<?php

function fetchClearance1($db){
    $query = "SELECT id_product, LEFT(name_product, 25) as name, LEFT(description_product, 60) as descr, discount_product as discount FROM product WHERE discount_product > 0 LIMIT 1;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

function fetchClearance2($db){
    $query = "SELECT id_product, LEFT(name_product, 25) as name, LEFT(description_product, 60) as descr, discount_product as discount FROM product WHERE discount_product > 0 LIMIT 1 OFFSET 1;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

function fetchClearance3($db){
    $query = "SELECT id_product, LEFT(name_product, 25) as name, LEFT(description_product, 60) as descr, discount_product as discount FROM product WHERE discount_product > 0 LIMIT 1 OFFSET 2;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

function fetchPOTD($db){
    $query = "SELECT id_product, name_product as name, LEFT(description_product, 60) as descr FROM product WHERE promoted_product = 1 LIMIT 1;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}