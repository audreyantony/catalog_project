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
                echo "<img class=\"img bg-secondary border border-secondary\" src=\"img/" . $img . "\" alt=\"" . $imgAlt[$i] . "\"> ";
                $i++;
                }
                }?>
            </div>
            <div class="description">
                <p><?= $item['description_product'] ?></p>
                <?php
                if(!empty($item["name_category"])) {
                    $categoryName = explode("µµ", $item["name_category"]);
                    $i = 0;
                    foreach ($categoryName AS $cat) {
                        echo "<h5 class=\"btn btn-light\">$cat</h5><br>";
                        $i++;
                    }
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
        <a href="./?page=home">
            <button>Go back home</button>
        </a>
    </div>
    <?php
}
?>