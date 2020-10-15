<?php

function entryCleaning($entry) {
    return htmlspecialchars(strip_tags(trim($entry)), ENT_QUOTES, 'UTF-8');
}

function shopInfoSelect($db) {
    $query = "SELECT * FROM shop ORDER BY post_code_shop ASC;";
    return mysqli_query($db, $query);
}