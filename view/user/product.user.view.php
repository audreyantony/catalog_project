<?php
if (isset($item)) {
    ?>
    <section id="catalog-detail">
        <div class="grid-container">
            <div class="title">
                <p><?= $item['name_product'] ?></p>
                <p><?= $item['price_product'] ?></p>
            </div>
            <div class="picture"></div>
            <div class="description">
                <p><?= $item['description_product'] ?></p>
                <p><?= $item['instock_product'] ?></p>
            </div>
        </div>
    </section>
    <?php
} else if (isset($error)) {
    ?>
    <div id="error">
        <img src="img/icon/404.png" alt="404">
        <p>Oops ! We can't find the page you're looking for</p>
        <a href="./?page=home">
            <button>Go back home</button>
        </a>
    </div>
    <?php
}
?>