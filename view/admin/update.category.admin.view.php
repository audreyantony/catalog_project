<!-- CATEGORIES UPDATE -->
<section class="container mt-5 pt-5 text-center">
    <!-- FORM -->
    <form method="post" class="text-left">
        <div class="d-flex m-5">
            <div class="container">
                <!-- ID INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">Id</label>
                    <input type="text" class="form-control" disabled value="<?=$category['id_category']?>">
                </div>
                <!-- NAME INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">name_category</label>
                    <input type="text" name="name" class="form-control" value="<?=$category['name_category']?>">
                </div>
            </div>
            <div class="container">
                <!-- SUCCESS/FAILED MESSAGE -->
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

    <!-- GO BACK BUTTON -->
    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>