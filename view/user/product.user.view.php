<?php
if (isset($item)) {
    ?>
    <section id="catalog-detail">
        <div class="grid-container">
            <div class="title">
                <h2><?= $item['name_product'] ?></h2>
                <p><?= $item['price_product'] ?> €</p>
            </div>
            <div class="picture"><?php
                if(!empty($item["name_img"])) {
                $imgName = explode("µµ", $item["name_img"]);
                $imgAlt = explode("µµ", $item["alt_img"]);
                $i = 0;
                foreach ($imgName AS $img) {
                echo "<img class=\"products clickablePicture img\"class=\"img\" src=\"img/" . $img . "\" alt=\"" . $imgAlt[$i] . "\" data-group=\"products\"> ";
                $i++;
                }
                }?>
            </div>
            <div class="description">
                <p><?= $item['description_product'] ?></p>
                <?php
                if(!empty($item["name_category"])) {
                    echo "<h5 class=\"btn btn-light\">";
                    $categoryName = explode("µµ", $item["name_category"]);
                    $i = 0;
                    foreach ($categoryName AS $cat) {
                        echo $cat;
                        if ($i < (count($categoryName) - 1) && count($categoryName) > 1){
                            echo "<br> & <br>";
                        }
                        $i++;
                    }
                    echo "</h5><br>";
                }
                    if($item['instock_product']==1){
                        echo "<h6>This product is in stock in our shops !</h6>";
                    } ?>
            </div>
        </div>
    </section>
    <?php
} else if (isset($error)) {
    ?>
    <div id="error">
        <img src="img/icon/404.png" alt="404">
        <p>Oops ! We can't find the page you're looking for</p>
        <a href="./?page=catalog">
            <button>Go back</button>
        </a>
    </div>
    <?php
}
?>
<div id="floatingGallery">
    <img id="leftArrow" src="img/icon/back.png">
    <button id="close">X</button>
    <img id="galleryPicture">;
    <img id="rightArrow" src="img/icon/next.png">
</div>

<script src="js/lightbox.js" type="text/javascript"></script>
