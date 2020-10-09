<?php

// CONNEXION TO THE DATABASE
function DBconnect(){

    $connect = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME, DB_PORT);
    mysqli_set_charset($connect,DB_CHARSET);

    return $connect;
}