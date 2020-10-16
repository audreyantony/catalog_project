<section id="catalog">
    <div class="products">
        <?php
        while ($item = mysqli_fetch_assoc($product)){
            if ($item['instock_product'] == 1){
                $picture = selectImgProducts($item['id_product'], $db);
                $category = selectCategoryProducts($item['id_product'], $db);
                if ($item['promoted_product'] == 1){
                    echo "<div class='promoted_item'>";
                    echo "<h2>".$item['name_product']."</h2>";
                    echo '<img src="img/'.$picture['name_img'].'" alt="'.$picture['alt_img'].'">';
                    echo "<p class='descr'>".$item['descr']." ... </p>";
                    echo "<a href='?product=".$item['id_product']."'><button>more on this ►</button></a>";
                    while ($cat = mysqli_fetch_assoc($category)){
                        echo "<p>| ".$cat['name_category']." |</p>";
                    }
                    echo "</div>";
                } else if ($item['promoted_product'] == 0) {
                    echo "<div class='item'>";
                    echo "<h2>".$item['name_product']."</h2>";
                    echo "<img src=\"img/".$picture['name_img']."\" alt=\"".$picture['alt_img']."\">";
                    echo "<p class='descr'>".$item['descr']." ... </p>";
                    echo "<a href='?product=".$item['id_product']."'><button>more on this ►</button></a>";
                    while ($cat = mysqli_fetch_assoc($category)){
                        echo "<p>| ".$cat['name_category']." |</p>";
                    }
                    echo "</div>";
                }
            }
        }
        ?>
    </div>
</section>

<script type="text/javascript">
    function dicountedPrice(price, discount) {
        return price - (price * discount / 100);
    }
</script>


