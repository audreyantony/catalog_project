<section class="container mt-5">
    <form method="post">
        <div class="d-flex m-5">
            <div class="container">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control" disabled value="<?=$shop['id_shop']?>">
                </div>
                <div class="form-group">
                    <label>name_shop</label>
                    <input type="text" name="name" class="form-control" value="<?=$shop['name_shop']?>">
                </div>
                <div class="form-group">
                    <label>localisation_shop</label>
                    <input type="text" name="loca" class="form-control" value="<?=$shop['localisation_shop']?>">
                </div>
                <div class="form-group">
                    <label>street_shop</label>
                    <input type="text" name="street" class="form-control" value="<?=$shop['street_shop']?>">
                </div>

            </div>
            <div class="container">
                <div class="form-group">
                    <label>post_code_shop</label>
                    <input type="text" name="pc" class="form-control" value="<?=$shop['post_code_shop']?>">
                </div>
                <div class="form-group">
                    <label>city_shop</label>
                    <input type="text" name="city" class="form-control" value="<?=$shop['city_shop']?>">
                </div>
                <div class="form-group">
                    <label>description_shop</label>
                    <input type="text"name="descr"  class="form-control" value="<?=$shop['description_shop']?>">
                </div>
                <?php
                if (isset($help)){
                    echo "<small class=\"form-text text-danger m-3\">".$help."</small>";
                }
                ?>
                <input type="submit" name="send" value="Submit" class="btn btn-primary mt-5 float-right">
            </div>
        </div>
    </form>
</section>

