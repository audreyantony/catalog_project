<section class="container col-md-4 ml-auto mr-auto m-5 text-center">
    <h1 class="text-danger m-3">THIS IS THE DELETE PAGE</h1>
    <div class="card text-right" style="width: 36rem;">
        <div class="card-body">
            <h5 class="card-title text-left"><?=$category['name_category']?></h5>
            <h6 class="card-subtitle mb-2 text-muted text-left">This category ID = <?=$category['id_category']?></h6>
            <a href="?admin=crud&updatecategory=<?=$category['id_category']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
            <hr>
            <p class="card-text text-danger mt-5"> WARNING ! <br>You will not be able to cancel <br>the deletion of this caetgory. </p>
            <a href="?admin=crud&deletecategory=<?=$category['id_category']?>&confirm=yes"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
        </div>
    </div>
    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>