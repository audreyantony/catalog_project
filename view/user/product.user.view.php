<?php
if (isset($item)) {
    ?>
    <div>
        <p><?= $item['name_product'] ?></p>
        <p><?= $item['description_product'] ?></p>
        <p><?= $item['instock_product'] ?></p>
        <p><?= $item['price_product'] ?></p>
    </div>
    <?php
} else if (isset($error)){
    ?>
    <div class="error">
        <img src="img/icon/404.png" alt="404">
        <p>Oops ! We can't find the page you're looking for</p>
        <a href="./?page=home"><button>Go back home</button></a>
    </div>
<?php
}
    ?>