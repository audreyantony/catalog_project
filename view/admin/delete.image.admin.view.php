<section class="container col-md-4 ml-auto mr-auto m-5 text-center">
    <h1 class="text-danger m-3">THIS IS THE DELETE PAGE</h1>
    <div class="card text-right" style="width: 36rem;">
        <div class="card-body">
            <h5 class="card-title text-left"><?=$img['name_img']?></h5>
            <div class ="text-left"><img class="bg-dark border" width="230px" src="img/<?=$img['name_img']?>" alt="<?=$img['alt_img']?>"></div>
            <h6 class="card-subtitle mb-2 mt-2 text-muted text-left">This image ID = <?=$img['id_img']?></h6>
            <p class="card-text text-left">Alt : <?=$img['id_img']?></p>
            <a href="?admin=crud&updateimage=<?=$img['id_img']?>"><button type="button" class="btn btn-primary ml-3 mb-2">UPDATE</button></a>
            <hr>
            <p class="card-text text-danger mt-5"> WARNING ! <br>You will not be able to cancel <br>the deletion of this image. </p>
            <a href="?admin=crud&deleteimage=<?=$img['id_img']?>&confirm=yes"><button type="button" class="btn btn-danger ml-3 mb-2">DELETE</button></a>
        </div>
    </div>
    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>