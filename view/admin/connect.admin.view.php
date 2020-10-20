<section class="container-md mt-5">
    <form class="container-md mt-5" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Nickname</label>
            <input type="text" name="login" placeholder="nickname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pwd" placeholder="password" required>
        </div>
        <?php
        if (isset($help)){
            echo "<small id=\"emailHelp\" class=\"form-text text-danger m-2\">".$help."</small>";
        }
        ?>
        <button type="submit" name="sign_in" class="btn btn-dark">Submit</button>
    </form>
</section>

