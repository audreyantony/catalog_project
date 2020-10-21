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