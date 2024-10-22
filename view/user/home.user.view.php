<!-- SECTION PRESENTATION -->
<section id="welcome">
    <div>
        <!-- IMG -->
        <img src="img/looks/bckc.jpg" alt="Cleaning-Products">
    </div>
    <div id="welcome-div"></div>
    <!-- PRESENTATION -->
    <div id="welcome-text">
        <p>Knowing the composition of the products that we use in the house is essential, for us of course, but also for our children and animals (and those who come to visit). Since 1987, we have been offering cleaning products with natural, organic and quality ingredients that respect nature, at low prices. For you and for the planet All-natural Artifacts puts at your disposal raw ingredients, DIY-kits to get you started, recipe books and even ready-to-use cleaning products.</p>
        <a href="?page=catalog"><button>Catalog ►</button></a>
    </div>
</section>

<!-- PRODUCTS IN CLEARANCE (3) AND PRODUCT OF THE DAY (1) -->
<section id="clearance-potd">
    <!-- CLEARANCE SECTION -->
    <div class="clearance">
        <?php
        while ($item = mysqli_fetch_assoc($clearance)){
            if(!empty($item["img"])) {
                $imgName = explode("µµ", $item["img"]);
                $imgAlt = explode("µµ", $item["alt"]);}
            $title = explode("-",$item['name']);
            $now = time();
            $end = strtotime($item['end']);
            $days = dateDiff($now, $end);?>
            <div class="bta">
                <h3><?=$item['discount']?> % <span>on</span></h3>
                <img src="img/upload/<?=isset($imgName[1]) ? $imgName[1] : $imgName[0]?>" alt="<?=isset($imgAlt[1]) ? $imgAlt[1] : $imgAlt[0]?>">
                <h4><?=$title[0]?></h4>
                <h5>Now at <br> <span>| <script type="text/javascript">document.write(discount(<?=$item['price_product']?>,<?=$item['discount']?>))</script> € |</span><br>In place of <?=$item['price_product']?> €</h5>
                <a href="?product=<?=$item['id_product']?>"><button class="asb">Read more</button></a>
                <p>Ends in <?=$days['day']?> day<?=$days['day']>=1? "s" : ""?></p>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- PRODUCT OF THE DAY SECTION -->
    <div class="potd">
        <?php
        while ($item = mysqli_fetch_assoc($POTD)){
            if(!empty($item["img"])) {
                $imgName = explode("µµ", $item["img"]);
                $imgAlt = explode("µµ", $item["alt"]);}
            $title = explode("-",$item['name']);
            ?>
            <div class="bta">
                <h3>Today's Pick :</h3>
                <img src="img/upload/<?=isset($imgName[1]) ? $imgName[1] : $imgName[0]?>" alt="<?=isset($imgAlt[1]) ? $imgAlt[1] : $imgAlt[0]?>">
                <h4><?=$title[0]?></h4>
                <p><?=$item['descr']?> ...</p>
                <a href="?product=<?=$item['id_product']?>"><button class="asb">Read more</button></a>
            </div>
            <div></div>
        <?php
        }
        ?>
    </div>
</section>
