<div class="container mt-5">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Products
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    En chantier.
                </div>
            </div>
        </div>
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
                                        <th scope="col">Action :</th>
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
                    En chantier.
                </div>
            </div>
        </div>
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
                    En chantier.
                </div>
            </div>
        </div>
    </div>
</div>