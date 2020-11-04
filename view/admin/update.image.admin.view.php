<section class="container mt-5 pt-5 text-center">
    <form method="post" class="text-left">
        <div class="d-flex m-5">
            <div class="container">
                <div class="form-group">
                    <label class="text-uppercase">Id</label>
                    <input type="text" class="form-control" disabled value="<?=$img['id_img']?>">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">name_img</label>
                    <input type="file" name="name" class="form-control" value="<?=$img['name_img']?>">
                    <small class="form-text text-muted">This image is located in : <?=$img['name_img']?></small>
                </div>
            </div>
            <div class="container">
                <div class="form-group">
                    <label class="text-uppercase">alt_img</label>
                    <input type="text" name="alt" class="form-control" value="<?=$img['alt_img']?>">
                </div>
                <?php
                if (isset($help)){
                    echo "<small class=\"form-text text-danger mt-4 ml-3\">".$help."</small>";
                }
                if (isset($win)){
                    echo "<small class=\"form-text text-success mt-4 ml-3\">".$win."</small>";
                }
                ?>
                <input type="submit" name="send" value="Submit" class="btn btn-primary mt-5 float-right">
            </div>
        </div>
    </form>

    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>