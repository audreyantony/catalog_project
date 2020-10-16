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
        <div class="burgundy">
            <h3><?=$C1['discount']?> %</h3>
            <h4><?=$C1['name']?> ...</h4>
            <p><?=$C1['descr']?> ...</p>
            <a href="?product=<?=$C1['id_product']?>"><button class="anis">Read more</button></a>
        </div>
        <div class="terracotta">
            <h3><?=$C2['discount']?> %</h3>
            <h4><?=$C2['name']?> ...</h4>
            <p><?=$C2['descr']?> ...</p>
            <a href="?product=<?=$C2['id_product']?>"><button class="salmon">Read more</button></a>
        </div>
        <div class="anis">
            <h3><?=$C3['discount']?> %</h3>
            <h4><?=$C3['name']?> ...</h4>
            <p><?=$C3['descr']?> ...</p>
            <a href="?product=<?=$C3['id_product']?>"><button class="burgundy">Read more</button></a>
        </div>
    </div>
    <div class="potd">
        <div class="burgundy">
            <h3>Today's Pick :</h3>
            <h4><?=$POTD['name']?></h4>
            <p><?=$POTD['descr']?> ...</p>
            <a href="?product=<?=$POTD['id_product']?>"><button class="anis">Read more</button></a>
        </div>
        <div></div>
    </div>
</section>
