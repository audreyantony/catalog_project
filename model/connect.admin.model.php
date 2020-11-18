<?php

// CONNEXION
function au_signInSelect($nickname, $db){
    $au_query = 'SELECT * FROM user WHERE name_user = "'.$nickname.'";';
    return  mysqli_query($db, $au_query);
}