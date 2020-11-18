<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'home.user.model.php';


// CONTROLLER CODE

// QUERY FOR CLEARANCE PRODUCTS (3)
$clearance = fetchClearance($db);

// QUERY FOR PRODUCT OF THE DAY (1)
$POTD = fetchPOTD($db);

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.view.php';