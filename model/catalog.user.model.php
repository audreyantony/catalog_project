<?php
function selectTotalProducts($db){
    $query = "SELECT DISTINCT *
    FROM product
    WHERE instock_product = 1;";
    return mysqli_query($db, $query);
}

function selectAllProducts($productByPage, $currentPage, $db){
    $query = "
    SELECT DISTINCT p.id_product AS id_product, p.name_product, 
                    p.price_product, p.discount_product, p.discount_end_date_product, 
                    p.promoted_product, p.instock_product, p.discount_start_date_product, 
                    GROUP_CONCAT( DISTINCT img.name_img SEPARATOR 'µµ') AS name_img, 
                    GROUP_CONCAT( DISTINCT img.alt_img SEPARATOR 'µµ') AS alt_img , 
                    GROUP_CONCAT(DISTINCT category.name_category SEPARATOR 'µµ') AS name_category 
    FROM product AS p 
        JOIN product_has_img ON id_product = product_id_product_has_img 
        JOIN img ON img_id_product_has_img = id_img 
        JOIN product_has_category ON id_product = product_id_product 
        JOIN category ON category_id_category = id_category 
    WHERE instock_product = 1
    GROUP BY id_product 
    ORDER BY p.description_product ASC
    LIMIT ".$productByPage." 
    OFFSET ".(($currentPage-1)*$productByPage).";";
    return mysqli_query($db, $query);
}

function selectImgProducts($id, $db){
    $query = "SELECT id_product, name_img, alt_img FROM product JOIN product_has_img ON id_product = product_id_product_has_img JOIN img ON img_id_product_has_img = id_img WHERE id_product = ".$id." LIMIT 1;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}

function selectCategoryProducts($id, $db){
    $query = "SELECT id_product, name_category FROM product JOIN product_has_category ON id_product = product_id_product JOIN category ON category_id_category = id_category WHERE id_product = ".$id.";";
    return mysqli_query($db, $query);
}

function selectAllCategory($db){
    $query = "SELECT * FROM category;";
    return mysqli_query($db, $query);
}

function pagination($productNumber, $currentPage, $productByPage = 6){

    $page = ceil($productNumber / $productByPage);
    $pagination = "";

    if($page == 0){
        return "<p>There is no result</p>";
    } else if ($page == 1){
        return $pagination;
    }

    for ($i = 1; $i <=$page; $i++){
        if ($i==1){
            if($i==$currentPage){
                $pagination .= "";
            } else {
                $pagination .= "<a href=\"?page=catalog&catalog=".($currentPage-1)."\">&nbsp;&nbsp;◄ previous&nbsp;&nbsp;</a>";
            }
        }
        if ($i=$currentPage) {
            $pagination .= "<div><p>&nbsp;&nbsp; " . $i . "&nbsp;/&nbsp;". $page ." &nbsp;&nbsp;</p></div>";
        }
        if ($i=$page){
            if ($i==$currentPage){
                $pagination .= "";
            } else {
                $pagination .= "<a href=\"?page=catalog&catalog=".($currentPage+1)."\">&nbsp;&nbsp;next ►&nbsp;&nbsp;</a>";
            }
        }
    }
    return $pagination;
}

function selectMaxPrice($db){
    $query = "SELECT price_product FROM product ORDER BY price_product DESC LIMIT 1 ;";
    $result = mysqli_query($db, $query);
    return mysqli_fetch_assoc($result);
}