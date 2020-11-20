<!-- CONNEXION PAGE -->
<section class="container-md mt-5">
    <!-- FORM -->
    <form class="container-md mt-5" method="post">
        <?php
        if (isset($help)){
            echo "<small class=\"form-text text-danger m-3\">".$help."</small>";
        }
        ?>
        <!-- NICKNAME INPUT -->
        <div class="form-group">
            <label for="exampleInputEmail1" class="ml-3">Nickname</label>
            <input type="text" name="login" placeholder="nickname" class="form-control m-3" required>
        </div>
        <!-- PASSWORD INPUT -->
        <div class="form-group">
            <label for="exampleInputPassword1" class="ml-3">Password</label>
            <input type="password" class="form-control m-3" name="pwd" placeholder="password" required>
        </div>

        <!-- SUBMIT BUTTON -->
        <button type="submit" name="sign_in" class="btn btn-dark m-3">Submit</button>
    </form>
</section>

