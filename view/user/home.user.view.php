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
            ?>
            <div class="bta">
                <h3><?=$item['discount']?> % <span>on</span></h3>
                <h4><?=$item['name']?> ...</h4>
                <p><?=$item['descr']?> ...</p>
                <a href="?product=<?=$item['id_product']?>"><button class="asb">Read more</button></a>
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
