<?php

// CALLING MODEL
include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bin' . DIRECTORY_SEPARATOR . 'config.php';
include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'DBconnect.model.php';
include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'contact.user.model.php';

$db = DBconnect();

$shops = shopsLatLongSelect($db);

$data = [];

while ($shop = mysqli_fetch_assoc($shops)){
    $data[] = $shop;

}

header('Content-Type: application/json');
echo json_encode($data);
