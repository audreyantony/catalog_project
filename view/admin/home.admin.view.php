<!-- HOME PAGE -->
<div class="container mt-5">
    <!-- TITLE -->
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">ADMIN PAGE</h1>
            <p class="lead text-muted">On this page you can view the different categories of editable things, products, stores, categories and images.</p>
        </div>
    </section>
    <!-- DROPDOWN VIEW FOR CRUD -->
    <div class="accordion" id="accordionExample">
        <!-- PRODUCT -->
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Products
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered table-responsive-lg">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Promoted product</th>
                                        <th scope="col" style="width: 230px">Action :</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($product = mysqli_fetch_assoc($products)){?>
                                        <tr>
                                            <th scope="row" rowspan="2"><?=$product['id_product']?></th>
                                            <td><?=$product['name_product']?><br class="mb-3"><br>
                                                <?php if ($product['instock_product'] == 0 ){
                                                    echo "<p class='text-danger'>This product isn't in stock</p>";
                                                } else {echo "<p class='text-success'>This product is in stock</p>";}?></td>
                                            <td><?=$product['description_product']?> ... <br class="mb-3"></td>
                                            <td class="w-25"><p class="font-weight-light h4"><?=$product['price_product']?> €</p><br>
                                                <?php if ($product['discount_product'] > 0 ){
                                                    echo "Discount : <span class='font-weight-light text-info h4'>".$product['discount_product']." %</span><br> Strating date : <br>".$product['discount_start_date_product']."<br> Ending date :<br> ".$product['discount_end_date_product'];
                                                } else { echo "No discount";}?></td>
                                            <td><?php if ($product['promoted_product'] == 0 ){
                                                    echo "This product isn't promoted";
                                                } else {echo "<p class='text-success'>This is the product of the day</p>";}?></td>
                                            <td rowspan="2">
                                                <a href="?admin=crud&updateproduct=<?=$product['id_product']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
                                                <a href="?admin=crud&deleteproduct=<?=$product['id_product']?>"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><p>Category(ies) :</p>
                                                <?php
                                                if(!empty($product["name_category"])) {
                                                    $categoryName = explode("µµ", $product["name_category"]);
                                                    $i = 0;
                                                    foreach ($categoryName AS $cat) {
                                                        echo "<p class=\"btn btn-light\">$cat</p><br>";
                                                        $i++;
                                                        if ($i === 3){
                                                            echo "</tr><tr>";
                                                        }
                                                    }
                                                }
                                                ?>
                                            </td><td colspan="3">
                                            <?php
                                            if(!empty($product["name_img"])) {
                                                $imgName = explode("µµ", $product["name_img"]);
                                                $imgAlt = explode("µµ", $product["alt_img"]);
                                                $i = 0;
                                                foreach ($imgName AS $img) {
                                                    echo "<img style=\"width: 135px;\" class=\"img bg-secondary border border-secondary\" src=\"img/" . $img . "\" alt=\"" . $imgAlt[$i] . "\"> ";
                                                    $i++;
                                                }
                                            }
                                            ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="5" class="pt-3 pr-5 text-right">Add a shop :</td>
                                        <td colspan="1">
                                            <a href="?admin=crud&insertproduct"><button type="button" class="btn btn-success ml-3 mb-2">ADD</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOPS -->
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Shops
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Localisation</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Description</th>
                                        <th scope="col" style="width: 230px">Action :</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($shop = mysqli_fetch_assoc($shops)){
                                    ?>
                                    <tr>
                                        <th scope="row"><?=$shop['id_shop']?></th>
                                        <td><?=$shop['name_shop']?></td>
                                        <td><?=$shop['lat_shop']?> , <?=$shop['long_shop']?></td>
                                        <td class="w-25"><?=$shop['street_shop']?><br><?=$shop['post_code_shop']?><br><?=$shop['city_shop']?></td>
                                        <td><?=$shop['description_shop']?></td>
                                        <td>
                                            <a href="?admin=crud&updateshop=<?=$shop['id_shop']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
                                            <a href="?admin=crud&deleteshop=<?=$shop['id_shop']?>"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="5" class="pt-3 pr-5 text-right">Add a shop :</td>
                                        <td colspan="1">
                                            <a href="?admin=crud&insertshop"><button type="button" class="btn btn-success ml-3 mb-2">ADD</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- IMAGES -->
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Images
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">File name</th>
                                        <th scope="col">Image alt</th>
                                        <th scope="col" style="width: 230px">Action :</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($image = mysqli_fetch_assoc($images)){
                                        ?>
                                        <tr>
                                            <th scope="row"><?=$image['id_img']?></th>
                                            <td style="width:130px;"><img class="bg-dark" width="130px" src="img/<?=$image['name_img']?>" alt="<?=$image['alt_img']?>"></td>
                                            <td><?=$image['name_img']?></td>
                                            <td><?=$image['alt_img']?></td>
                                            <td>
                                                <a href="?admin=crud&updateimage=<?=$image['id_img']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
                                                <a href="?admin=crud&deleteimage=<?=$image['id_img']?>"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="4" class="pt-3 pr-5 text-right">Add a shop :</td>
                                        <td colspan="1">
                                            <a href="?admin=crud&insertimage"><button type="button" class="btn btn-success ml-3 mb-2">ADD</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CATEGORIES -->
        <div class="card mb-5">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Categories
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" style="width: 230px">Action :</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($category = mysqli_fetch_assoc($categories)){
                                        ?>
                                        <tr>
                                            <th scope="row"><?=$category['id_category']?></th>
                                            <td><?=$category['name_category']?></td>
                                            <td>
                                                <a href="?admin=crud&updatecategory=<?=$category['id_category']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
                                                <a href="?admin=crud&deletecategory=<?=$category['id_category']?>"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="2" class="pt-3 pr-5 text-right">Add a shop :</td>
                                        <td colspan="1">
                                            <a href="?admin=crud&insertcategory"><button type="button" class="btn btn-success ml-3 mb-2">ADD</button></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GO BACK BUTTON -->
    <a href="?user=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</div>