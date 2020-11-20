<!-- SHOP INSERTION PAGE -->
<section class="container mt-5 pt-5 text-center">
    <!-- FORM -->
    <form method="post" class="text-left">
        <div class="d-flex m-5">
            <div class="container">
                <!-- ID INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">Id</label>
                    <input type="text" class="form-control" disabled required value="A U T O F I L L">
                </div>
                <!-- NAME INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">name_shop</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="d-flex">
                    <!-- LATITUDE INPUT -->
                    <div class="form-group">
                        <label class="text-uppercase">lat_shop</label>
                        <input type="text" name="lat" class="form-control" required>
                    </div>
                    <!-- LONGITUDE INPUT -->
                    <div class="form-group">
                        <label class="text-uppercase ml-2">long_shop</label>
                        <input type="text" name="long" class="form-control ml-2" required>
                    </div>
                </div>
                <!-- STREET OF THE SHOP INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">street_shop</label>
                    <input type="text" name="street" class="form-control" required>
                </div>

            </div>
            <div class="container">
                <!-- POST CODE OF THE INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">post_code_shop</label>
                    <input type="text" name="pc" class="form-control" maxlength="5" required>
                </div>
                <!-- CITY OF THE SHOP INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">city_shop</label>
                    <input type="text" name="city" class="form-control" required>
                </div>
                <!-- DESCRIPTION OF THE SHOP INPUT -->
                <div class="form-group">
                    <label class="text-uppercase">description_shop</label>
                    <input type="text" name="descr" class="form-control" required>
                </div>
                <!-- SUCCESS/FAILED MESSAGE -->
                <?php
                if (isset($help)){
                    echo "<small class=\"form-text text-danger m-2\">".$help."</small>";
                }
                if (isset($win)){
                    echo "<small class=\"form-text text-success m-2\">".$win."</small>";
                }
                ?>
                <!-- SUBMIT BUTTON -->
                <input type="submit" name="insert" value="Submit" class="btn btn-primary mt-5 float-right">
            </div>
        </div>
    </form>

    <!-- GO BACK BUTTON -->
    <a href="?admin=home"><button type="button" class="btn btn-light mt-5"> << Go back</button></a>
</section>