<?php

// INPUT ENTRY CLEANING
function entryCleaning($entry) {
    return htmlspecialchars(strip_tags(trim($entry)), ENT_QUOTES, 'UTF-8');
}

// SELECT ALL SHOPS
function shopInfoSelect($db) {
    $query = "SELECT * FROM shop ORDER BY post_code_shop ASC;";
    return mysqli_query($db, $query);
}

// SHOPS POSITION FOR LEAFLET
function shopsLatLongSelect($db) {
    $query = "SELECT id_shop, name_shop, lat_shop, long_shop, description_shop FROM shop ORDER BY lat_shop ASC;";
    return mysqli_query($db, $query);
}