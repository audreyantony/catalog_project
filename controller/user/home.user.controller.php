<?php

// CALLING MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'home.user.model.php';


// CONTROLLER CODE
$C1 = fetchClearance1($db);
$C2 = fetchClearance2($db);
$C3 = fetchClearance3($db);

$POTD = fetchPOTD($db);

// CALLING VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.view.php';