<!-- PRODUCT DELETION PAGE -->
<section class="container col-md-4 ml-auto mr-auto m-5 text-center">
    <!-- TITLE -->
    <h1 class="text-danger m-3">THIS IS THE DELETE PAGE</h1>
    <!-- RECAP -->
    <div class="card text-right" style="width: 36rem;">
        <div class="card-body">
            <h5 class="card-title text-left"><?=$product['name_product']?></h5>
            <h6 class="card-subtitle mb-2 mt-2 text-muted text-left">This product ID = <?=$product['id_product']?></h6>
            <p class="card-text text-left">Description : </span> <?=$product['description_product']?><br>
                <?=$product['price_product']?><br>
                <?php
                if ($product['discount_product']>0){
                    echo "<span>";
                } else {
                    echo "<span class='text-muted'>";
                }
                ?>
                <span class="w-50">Discount : </span><?=$product['discount_product']?> %<br>
                <span class="w-50">Start date : </span><?=date("F j, Y, g:i a",strtotime($product['discount_start_date_product']))?><br>
                <span class="w-50">End date : </span><?=date("F j, Y, g:i a",strtotime($product['discount_end_date_product']))?></span><br>
                <span class="w-50">Product of the day : </span><?php
                if ($product['promoted_product']){
                    echo "Yes";
                }else{
                    echo "No";
                }
                ?><br>
                <span class="w-50">In stock : </span><?php
                if ($product['instock_product']){
                echo "Yes";
                }else{
                echo "No";
                }
                ?><br>
                <?php
                if (isset($help)){
                    echo "<small class=\"form-text text-danger mt-4 ml-3\">".$help."</small>";
                }
                ?>
            </p>
            <a href="?admin=crud&updateproduct=<?=$product['id_product']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
            <hr>
            <p class="card-text text-danger mt-5"> WARNING ! <br>You will not be able to cancel <br>the deletion of this product. </p>
            <a href="?admin=crud&deleteproduct=<?=$product['id_product']?>&confirm=yes"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
        </div>
    </div>
    <!-- GO BACK BUTTON -->
    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>