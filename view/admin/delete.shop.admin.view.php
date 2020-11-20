<!-- SHOP DELETION PAGE -->
<section class="container col-md-4 ml-auto mr-auto m-5 text-center">
    <!-- TITLE -->
    <h1 class="text-danger m-3">THIS IS THE DELETE PAGE</h1>
    <!-- RECAP -->
    <div class="card text-right" style="width: 36rem;">
        <div class="card-body">
            <h5 class="card-title text-left"><?=$shop['name_shop']?></h5>
            <h6 class="card-subtitle mb-2 text-muted text-left">This shop ID = <?=$shop['id_shop']?></h6>
            <p class="card-text text-left">Localisation : <?=$shop['lat_shop']?>, <?=$shop['long_shop']?></p>
            <p class="card-text text-left"><?=$shop['street_shop']?><br><?=$shop['post_code_shop']?>, <?=$shop['city_shop']?>
                <br><?=$shop['description_shop']?></p>
            <a href="?admin=crud&updateshop=<?=$shop['id_shop']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
            <hr>
            <p class="card-text text-danger mt-5"> WARNING ! <br>You will not be able to cancel <br>the deletion of this shop. </p>
            <a href="?admin=crud&deleteshop=<?=$shop['id_shop']?>&confirm=yes"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
        </div>
    </div>
    <!-- GO BACK BUTTON -->
    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>