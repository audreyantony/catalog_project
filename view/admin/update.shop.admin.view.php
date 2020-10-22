<section class="container mt-5 pt-5 text-center">
    <form method="post" class="text-left">
        <div class="d-flex m-5">
            <div class="container">
                <div class="form-group">
                    <label class="text-uppercase">Id</label>
                    <input type="text" class="form-control" disabled value="<?=$shop['id_shop']?>">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">name_shop</label>
                    <input type="text" name="name" class="form-control" value="<?=$shop['name_shop']?>">
                </div>
                <div class="d-flex">
                    <div class="form-group">
                        <label class="text-uppercase">lat_shop</label>
                        <input type="text" name="lat" class="form-control" value="<?=$shop['lat_shop']?>">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase ml-2">long_shop</label>
                        <input type="text" name="long" class="form-control ml-2" value="<?=$shop['long_shop']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">street_shop</label>
                    <input type="text" name="street" class="form-control" value="<?=$shop['street_shop']?>">
                </div>

            </div>
            <div class="container">
                <div class="form-group">
                    <label class="text-uppercase">post_code_shop</label>
                    <input type="text" name="pc" class="form-control" maxlength="5" value="<?=$shop['post_code_shop']?>">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">city_shop</label>
                    <input type="text" name="city" class="form-control" value="<?=$shop['city_shop']?>">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">description_shop</label>
                    <input type="text"name="descr"  class="form-control" value="<?=$shop['description_shop']?>">
                </div>
                <?php
                if (isset($help)){
                    echo "<small class=\"form-text text-danger m-2\">".$help."</small>";
                }
                if (isset($win)){
                    echo "<small class=\"form-text text-success m-2\">".$win."</small>";
                }
                ?>
                <input type="submit" name="send" value="Submit" class="btn btn-primary mt-5 float-right">
            </div>
        </div>
    </form>

    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>

