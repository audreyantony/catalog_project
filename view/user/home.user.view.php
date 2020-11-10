<section id="welcome">
    <div>
        <img src="img/looks/bckc.jpg" alt="Cleaning-Products">
    </div>
    <div id="welcome-div"></div>
    <div id="welcome-text">
        <p>Knowing the composition of the products that we use in the house is essential, for us of course, but also for our children and animals (and those who come to visit). Since 1987, we have been offering cleaning products with natural, organic and quality ingredients that respect nature, at low prices. For you and for the planet All-natural Artifacts puts at your disposal raw ingredients, DIY-kits to get you started, recipe books and even ready-to-use cleaning products.</p>
        <a href="?page=catalog"><button>Catalog ►</button></a>
    </div>
</section>

<section id="clearance-potd">
    <div class="clearance">
        <?php
        while ($item = mysqli_fetch_assoc($clearance)){
            if(!empty($item["img"])) {
                $imgName = explode("µµ", $item["img"]);
                $imgAlt = explode("µµ", $item["alt"]);}
            $title = explode("-",$item['name']);
            $newPrice = $item['price_product']-($item['price_product']*($item['discount']/100));
            $now = time();
            $end = strtotime($item['end']);
            $days = dateDiff($now, $end);;?>
            <div class="bta">
                <h3><?=$item['discount']?> % <span>on</span></h3>
                <img src="img/<?=isset($imgName[1]) ? $imgName[1] : $imgName[0]?>" alt="<?=isset($imgAlt[1]) ? $imgAlt[1] : $imgAlt[0]?>">
                <h4><?=$title[0]?></h4>
                <h5>Now at <br> <span>| <?=$newPrice?> € |</span><br>In place of <?=$item['price_product']?> €</h5>
                <a href="?product=<?=$item['id_product']?>"><button class="asb">Read more</button></a>
                <p>Ends in <?=$days['day']?> day<?=$days['day']>=1? "s" : ""?></p>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="potd">
        <div class="bta">
            <h3>Today's Pick :</h3>
            <h4><?=$POTD['name']?></h4>
            <p><?=$POTD['descr']?> ...</p>
            <a href="?product=<?=$POTD['id_product']?>"><button class="asb">Read more</button></a>
        </div>
        <div></div>
    </div>
</section>
