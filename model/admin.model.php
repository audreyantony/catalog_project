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

function updateTheShop($name, $loca, $street, $postcode, $city, $descr, $id, $db){
    $query = 'UPDATE shop SET name = '.$name.', localisation_shop = '.$loca.' ';
}