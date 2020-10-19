<?php

function selectProductData ($db, $pageId){
    $sql = 'SELECT * FROM product WHERE id_product = "'.$pageId.'";';
    return mysqli_query($db,$sql);
}
