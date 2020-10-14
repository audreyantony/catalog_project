<?php
?>

<section id="contact">
    <div class="img"></div>
    <div class="inputs">
        <h3>Contact</h3>
        <form action="" method="post">
            <input class="form1" name="name" type="text" placeholder="Your name" required>
            <input class="form2" name="message" type="email" placeholder="Your email address" required>
            <textarea class="form3" name="message" placeholder="Your comment or message" required></textarea>
            <input class="form4" type="submit" value="Send ►">
        </form>
        <h4></h4>
    </div>
</section>

<section id="social-media">
    <a href="https://fr-fr.facebook.com/" target="_blank"><img src="img/social-media/facebook.png" alt="facebook"></a>
    <a href="https://www.instagram.com/" target="_blank"><img src="img/social-media/instagram.png" alt="instagram"></a>
    <a href="https://www.pinterest.fr/" target="_blank"><img src="img/social-media/pinterest.png" alt="pinterest"></a>
    <a href="https://www.youtube.com/" target="_blank"><img src="img/social-media/youtube.png" alt="youtube"></a>
</section>

<section id="map">
    <div class="shop-map"></div>
    <div class="list-shop">
        <div id="leaflet-map">
        </div>
    </div>
</section>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script type="text/javascript" src="js/leaflet.js"></script>