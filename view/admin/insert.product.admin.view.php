<section class="container mt-5 pt-5 text-center">
    <form method="post" class="text-left">
        <div class="d-flex m-5">
            <div class="container">
                <div class="form-group">
                    <label class="text-uppercase">Id</label>
                    <input type="text" class="form-control" disabled value="A U T O F I L L"">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">name_product</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">description_product</label>
                    <textarea class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">price_product</label>
                    <input type="text" name="price" class="form-control" pattern="\d+(\.\d{1,2})?">
                    <small class="form-text text-muted">Format : 123.45</small>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="text-uppercase">Discount_product</label>
                        <select name="discount" class="form-control w-100">
                            <option value="0" selected>None</option>
                            <option value="10">10 %</option>
                            <option value="15">15 %</option>
                            <option value="20">20 %</option>
                            <option value="25">25 %</option>
                            <option value="30">30 %</option>
                            <option value="35">35 %</option>
                            <option value="40">40 %</option>
                            <option value="45">45 %</option>
                            <option value="50">50 %</option>
                            <option value="60">60 %</option>
                            <option value="70">70 %</option>
                            <option value="80">80 %</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="text-uppercase">Discount_start</label>
                        <input type="text" class="form-control" disabled placeholder="N O W">
                    </div>
                    <div class="col">
                        <label class="text-uppercase">Discount_end</label>
                        <input type="text" name="end" class="form-control" placeholder="I F  N E E D E D">
                        <small class="form-text text-muted">in ... days</small>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="form-group">
                    <label class="text-uppercase">Promoted_product</label>
                    <select class="custom-select my-1 mr-sm-2" name="promoted">
                        <option value="0" selected>No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">Instock_product</label>
                    <select class="custom-select my-1 mr-sm-2" name="stock">
                        <option value="1" selected>Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">Main Category_product</label>
                    <select name="category" class="form-control w-100">
                        <option value="0" selected>You have to choose one</option>
                        <?php
                        while ($cat = mysqli_fetch_assoc($category)){
                            echo '<option value="'.$cat['id_category'].'">'.$cat['name_category'].'</option>';
                        }
                        ?>
                    </select>
                    <small class="form-text text-muted">You'll be able to add more categories later</small>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">Main image_product</label>
                    <select name="image" class="form-control w-100">
                        <option value="0" selected>You have to choose one</option>
                        <?php
                        while ($img = mysqli_fetch_assoc($image)){
                            echo '<option value="'.$img['id_img'].'">'.$img['name_img'].'</option>';
                        }
                        ?>
                    </select>
                    <small class="form-text text-muted">You'll be able to add more images later</small>
                </div>
                <?php
                if (isset($help)){
                    echo "<small class=\"form-text text-danger mt-4 ml-3\">".$help."</small>";
                }
                if (isset($win)){
                    echo "<small class=\"form-text text-success mt-4 ml-3\">".$win."</small>";
                }
                ?>
                <input type="submit" name="insert" value="Submit" class="btn btn-primary mt-5 float-right">
            </div>
        </div>
    </form>

    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>