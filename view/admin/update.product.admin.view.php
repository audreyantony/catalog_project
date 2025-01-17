<!-- PRODUCT UPDATE PAGE -->
<section class="container mt-5 pt-5 text-center">
    <!-- FORM -->
    <form method="post" class="text-left">
        <div class="d-flex m-5">
            <div class="container">
                <!-- ID INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">Id</label>
                    <input type="text" class="form-control" disabled value="<?=$product['id_product']?>">
                </div>
                <!-- NAME INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">name_product</label>
                    <input type="text" name="name" class="form-control" value="<?=$product['name_product']?>">
                </div>
                <!-- DESCRIPTION INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">description_product</label>
                    <textarea class="form-control" name="description" rows="6"><?=$product['description_product']?></textarea>
                </div>
            </div>
            <div class="container">
                <!-- PRICE INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">price_product</label>
                    <input type="text" name="price" class="form-control" pattern="\d+(\.\d{1,2})?" value="<?=$product['price_product']?>">
                    <small class="form-text text-muted">Format : 123.45</small>
                </div>
                <div class="row">
                    <!-- DISCOUNT INPUT -->
                    <div class="col">
                        <label class="text-uppercase">Discount_product</label>
                        <select name="discount" class="form-control w-100">
                            <option value="0" <?php if ($product['discount_product'] == 0){echo "selected";}?>>None</option>
                            <option value="10" <?php if ($product['discount_product'] == 10){echo "selected";}?>>10 %</option>
                            <option value="15" <?php if ($product['discount_product'] == 15){echo "selected";}?>>15 %</option>
                            <option value="20" <?php if ($product['discount_product'] == 20){echo "selected";}?>>20 %</option>
                            <option value="25" <?php if ($product['discount_product'] == 25){echo "selected";}?>>25 %</option>
                            <option value="30" <?php if ($product['discount_product'] == 30){echo "selected";}?>>30 %</option>
                            <option value="35" <?php if ($product['discount_product'] == 35){echo "selected";}?>>35 %</option>
                            <option value="40" <?php if ($product['discount_product'] == 40){echo "selected";}?>>40 %</option>
                            <option value="45" <?php if ($product['discount_product'] == 45){echo "selected";}?>>45 %</option>
                            <option value="50" <?php if ($product['discount_product'] == 50){echo "selected";}?>>50 %</option>
                            <option value="60" <?php if ($product['discount_product'] == 60){echo "selected";}?>>60 %</option>
                            <option value="70" <?php if ($product['discount_product'] == 70){echo "selected";}?>>70 %</option>
                            <option value="80" <?php if ($product['discount_product'] == 80){echo "selected";}?>>80 %</option>
                        </select>
                    </div>
                    <!-- DISCOUNT START DATE INPUT -->
                    <div class="col">
                        <label class="text-uppercase">Discount_start</label>
                        <input type="text" class="form-control" disabled placeholder="N O W">
                    </div>
                    <!-- DISCOUNT END DATE INPUT -->
                    <div class="col">
                        <label class="text-uppercase">Discount_end</label>
                        <input type="text" name="end" class="form-control" placeholder="I F  N E E D E D" value="<?=date("j", abs(time() - strtotime($product['discount_end_date_product'])))?>">
                        <small class="form-text text-muted">in ... days</small>
                    </div>
                </div>
                <!-- PRODUCT PROMOTION INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">Promoted_product</label>
                    <select class="custom-select my-1 mr-sm-2" name="promoted">
                        <option value="0" <?php if ($product['promoted_product'] == 0){echo "selected";}?>>No</option>
                        <option value="1" <?php if ($product['promoted_product'] == 1){echo "selected";}?>>Yes</option>
                    </select>
                </div>
                <!-- STOCK STATUS INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">Instock_product</label>
                    <select class="custom-select my-1 mr-sm-2" name="stock">
                        <option value="1" <?php if ($product['instock_product'] == 1){echo "selected";}?>>Yes</option>
                        <option value="0" <?php if ($product['instock_product'] == 0){echo "selected";}?>>No</option>
                    </select>
                </div>
                <!-- SUCCESS/FAILURE MESSAGE -->
                <?php
                if (isset($help)){
                    echo "<small class=\"form-text text-danger mt-4 ml-3\">".$help."</small>";
                }
                if (isset($win)){
                    echo "<small class=\"form-text text-success mt-4 ml-3\">".$win."</small>";
                }
                ?>
                <!-- SUBMIT BUTTON -->
                <input type="submit" name="send" value="Submit" class="btn btn-primary mt-5 float-right">
            </div>
        </div>
    </form>
</section>
<!-- IMG AND CATEGORY FOR THE PRODUCT UPDATE -->
    <section class="container mt-5 pt-5 text-center">
        <!-- FORM -->
        <form method="post" class="text-left">
            <div class="d-flex m-5">
                <div class="container">
                    <!-- CATEGORY -->
                    <div class="form-group">
                        <label class="text-uppercase">category_product</label><br>
                        <?php
                        if(!empty($product["name_category"])) {
                            $categoryName = explode("µµ", $product["name_category"]);
                            $categoryId = explode("µµ", $product["id_category"]);
                            $i = 0;
                            foreach ($categoryName AS $cat) {
                                echo "<p class='btn btn-light'>".$cat." <a href='?admin=crud&updateproduct=".$product['id_product']."&categorytodelete=".$categoryId[$i]."'><button type='button' class='btn btn-outline-danger m-1'>&#x2716</button></a></p>";
                                $i++;
                            }
                        }
                        ?>
                        <!-- ADD AN CATEGORY -->
                        <form class="form-group" method="post">
                            <div class="form-group">
                                <select name="cat" class="form-control">
                                    <option value="0" selected>M O R E</option>
                                    <?php
                                    while ($cat = mysqli_fetch_assoc($category)){
                                        echo '<option value="'.$cat['id_category'].'">'.$cat['name_category'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- SUCCESS/FAILURE MESSAGE -->
                            <?php
                            if (isset($helpCat)){
                                echo "<small class=\"form-text text-danger mt-4 ml-3 mb-5\">".$helpCat."</small>";
                            }
                            if (isset($winCat)){
                                echo "<small class=\"form-text text-success mt-4 ml-3 mb-5\">".$winCat."</small>";
                            }
                            ?>
                            <!-- SUBMIT BUTTON -->
                            <button type="submit" name="submitCat" class="btn btn-primary block">ADD</button>
                        </form>
                    </div>
                </div>
                <!-- IMG -->
                <div class="container">
                    <div class="form-group">
                        <label class="text-uppercase">img_product</label><br>
                        <?php
                        if(!empty($product["name_img"])) {
                            $imgName = explode("µµ", $product["name_img"]);
                            $imgAlt = explode("µµ", $product["alt_img"]);
                            $imgId = explode("µµ", $product["id_img"]);
                            $i = 0;
                            foreach ($imgName AS $img) {
                                echo "<p class='btn btn-light'><img style=\"width: 80px;\" class=\"img bg-secondary mb-2 border border-secondary\" src=\"img/upload/" . $img . "\" alt=\"" . $imgAlt[$i] . "\"><a href='?admin=crud&updateproduct=".$product['id_product']."&imagetodelete=".$imgId[$i]."'><button type='button' class='btn btn-outline-danger m-1'>&#x2716</button></a></p> ";
                                $i++;
                            }
                        }
                        ?>
                        <!-- ADD AN IMG -->
                        <form class="form-group" method="post">
                            <div class="form-group">
                                <select name="image" class="form-control">
                                    <option value="0" selected>M O R E</option>
                                    <?php
                                    while ($img = mysqli_fetch_assoc($image)){
                                        echo '<option value="'.$img['id_img'].'">'.$img['name_img'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- SUCCESS/FAILURE MESSAGE -->
                            <?php
                            if (isset($helpImg)){
                                echo "<small class=\"form-text text-danger mt-4 ml-3 mb-5\">".$helpImg."</small>";
                            }
                            if (isset($winImg)){
                                echo "<small class=\"form-text text-success mt-4 ml-3 mb-5\">".$winImg."</small>";
                            }
                            ?>
                            <!-- SUBMIT BUTTON -->
                            <button type="submit" name="submitImage" class="btn btn-primary block">ADD</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- GO BACK BUTTON -->
    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>