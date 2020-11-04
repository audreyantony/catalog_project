<section id="containercatalog">
    <section id="find">
        <h3>Search :</h3>
        <form action="" method="post">
            <h4>Category :</h4>
            <div>
                <?php
                while ($cat =mysqli_fetch_assoc($category)){
                    echo '<input type="checkbox" name="category['.$cat['id_category'].']" class="demo" id="'.$cat['id_category'].'" value="'.$cat['id_category'].'">
                       <label for="'.$cat['id_category'].'">'.$cat['name_category'].'</label><br><br>';
                }
                ?>
            </div>
            <h4>Price range :</h4>
            <div id="price">
                <p>See the products between :</p><br>
                <input type="text" name="minimum" id="min" value="0"><label for="min"> € &nbsp;& &nbsp;&nbsp; </label>
                <input type="text" name="maximum" id="max" value="<?=$maxPrice['price_product']?>"><label for="min"> €</label>
            </div>
            <div>
                <button type="submit" name="search"> GO ► </button>
            </div>
        </form>

    </section>
    <section id="catalog">
        <div class="products">
            <?php
            while ($item = mysqli_fetch_assoc($product)) {
                if ($item['instock_product'] == 1) {
                    $picture = selectImgProducts($item['id_product'], $db);
                    $category = selectCategoryProducts($item['id_product'], $db);
                    if ($item['promoted_product'] == 1) {
                        echo "<div class='promoted_item'>";
                        echo "<h2><img src=\"img/icon/thumb.png\" alt=\"thumb-up\"> " . $item['name_product'] . "</h2>";
                        echo '<img class="img" src="img/' . $picture['name_img'] . '" alt="' . $picture['alt_img'] . '">';
                        if ($item['discount_product'] > 0) {
                            echo '<H5>DISCOUNT</H5>';
                        } else {
                            echo "<h5>" . $item['price_product'] . " € </h5>";
                        }
                        echo "<a href='?product=" . $item['id_product'] . "'><button>See More ►</button></a>";
                        echo "<p class='category'>";
                        while ($cat = mysqli_fetch_assoc($category)) {
                            echo $cat['name_category'] . " ";
                        }
                        echo "</p></div>";
                    } else if ($item['promoted_product'] == 0) {
                        echo "<div class='item'>";
                        echo "<h2>" . $item['name_product'] . "</h2>";
                        echo "<img class=\"img\" src=\"img/" . $picture['name_img'] . "\" alt=\"" . $picture['alt_img'] . "\">";
                        if ($item['discount_product'] > 0) {
                            echo '<H5>DISCOUNT</H5>';
                        } else {
                            echo "<h5>" . $item['price_product'] . " € </h5>";
                        }
                        echo "<a href='?product=" . $item['id_product'] . "'><button>See More ►</button></a>";
                        echo "<p class='category'>";
                        while ($cat = mysqli_fetch_assoc($category)) {
                            echo $cat['name_category'] . " ";
                        }
                        echo "</p></div>";
                    }
                }
            }
            ?>
        </div>
        <div id="pagination">
            <?php
            echo pagination($productNumber, $currentPage, 6);
            ?>
        </div>

    </section>
</section>

<script type="text/javascript">
    function dicountedPrice(price, discount) {
        return price - (price * discount / 100);
    }
</script>