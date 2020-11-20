<!-- CONTACT PAGE -->
<section id="contact">
    <!-- CONTACT FORM -->
    <div class="img"></div>
    <div class="inputs">
        <h3>Contact</h3>
        <form action="" method="post">
            <?php
            if (isset($warning)){
                echo "<span>".$warning."</span>";
            }
            ?>
            <input class="form1" name="name" type="text" placeholder="Your name" value="<?=$nameEntry?>" >
            <input  class="form2" name="mail" type="email" placeholder="Your email address" value="<?=$mailEntry?>" required>
            <textarea class="form3" name="message" placeholder="Your comment or message" required><?=$messageEntry?></textarea>
            <input class="form4" name="sendForm" type="submit" value="Send ►">
        </form>
    </div>
</section>

<!-- SOCIAL MEDIA BUTTONS -->
<section id="social-media">
    <a href="https://fr-fr.facebook.com/" target="_blank"><img src="img/social-media/facebook.png" alt="facebook"></a>
    <a href="https://www.instagram.com/" target="_blank"><img src="img/social-media/instagram.png" alt="instagram"></a>
    <a href="https://www.pinterest.fr/" target="_blank"><img src="img/social-media/pinterest.png" alt="pinterest"></a>
    <a href="https://www.youtube.com/" target="_blank"><img src="img/social-media/youtube.png" alt="youtube"></a>
</section>

<!-- LEAFLET MAP AND SHOP LIST -->
<section id="map">
    <div class="list-shop">
        <h4>Shops</h4>
        <div class="shop">
        <?php
        while ($shop = mysqli_fetch_assoc($shops)){
            echo "<h5>".$shop['name_shop']."</h5>";
            echo "<p>".$shop['street_shop'].", ".$shop['city_shop'].".<br> Contact : ".$shop['description_shop']."</p><hr>";
        }
        ?>
        </div>
    </div>
    <div class="shop-map">
        <div class="custom-popup" id="leaflet-map">
        </div>
    </div>
</section>

<!-- JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script type="text/javascript" src="js/leaflet.js"></script>