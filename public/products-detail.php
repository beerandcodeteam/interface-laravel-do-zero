<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <?php require "./common/header.php"; ?>
    <body>
        <?php require "./common/nav-site.php"; ?>

        <header class="common-header">
            <div class="pattern__header"></div>
        </header>


        <div class="products__general main-wrapper">

            <aside class="product__selected">
                <article class="card__product">
                    <a href="products-detail.php">
                        <div class="card__cover">
                            <img src="./images/safar-safarov-MSN8TFhJ0is-unsplash.jpg" style="width: 322px;">
                        </div>
                        <header class="card__product-header">
                            <h2 class="title-medium">Nunquam perdere elevatus. </h2>
                            <p>Scutums velum! </p>
                        </header>
                    </a>
                </article>
                <a class="back-to-products" href="products.php">Cur gemna unda? </a>
            </aside>

            <section class="products__list">
                <header>
                    <h2 class="title-large">Cum quadra ridetis, omnes visuses imitari regius, brevis brodiumes. </h2>
                    <p>Ususs favere! Tabes grandis palus est. Sunt mensaes magicae fatalis, placidus genetrixes. Cum musa unda, omnes amores attrahendam pius, noster particulaes. </p>
                </header>

                <!-- Products stack -->
                <article class="product">
                    <a class="clickable-area" href="javascript:;">
                        <header class="product__header">
                            <h3 class="title-medium">Ubi est emeritis frondator? </h3>
                            <!-- Tooggle item -->
                            <span class="collapse__closed"></span>
                        </header>
                    </a>
                </article>

                <article class="product">
                    <a class="clickable-area" href="javascript:;">
                        <header class="product__header">
                            <h3 class="title-medium">Ubi est regius palus? </h3>
                                <!-- Tooggle item -->
                                <span class="collapse__closed"></span>
                        </header>
                    </a>
                </article>

                <article class="product">
                    <a class="clickable-area" href="javascript:;">
                        <header class="product__header">
                            <h3 class="title-medium">Est regius silva, cesaris. </h3>
                                <!-- Tooggle item -->
                                <span class="collapse__open"></span>
                        </header>
                    </a>

                    <section class="product__content">

                        <div class="product__desciption">
                            <h3 class="title-small">Nunquam demitto bulla. </h3>
                            <p>Pol, a bene nuclear vexatum iacere, castus luna! Pol, a bene hilotae, dexter rumor! Talis lamias ducunt ad palus. Abnobas persuadere in hafnia! Vigil, cedrium, et visus. Exsul, lapsus, et demissio. Vae. Clemens, salvus adgiums sapienter prensionem de varius, magnum fiscina.</p>
                        </div>

                    </section>
                </article>

                <article class="product">
                    <a class="clickable-area" href="javascript:;">
                        <header class="product__header">
                            <h3 class="title-medium">Fides talis itineris tramitem est. </h3>
                            <!-- Tooggle item -->
                            <span class="collapse__closed"></span>
                        </header>
                    </a>
                </article>

                <article class="product">
                    <a class="clickable-area" href="javascript:;">
                        <header class="product__header">
                            <h3 class="title-medium">Cur brabeuta cadunt? </h3>
                            <!-- Tooggle item -->
                            <span class="collapse__closed"></span>
                        </header>
                        <img class="exclusive__label" src="./images/Exclusivo-label.png" alt="Etiqueta de produto exclusivo">
                    </a>
                </article>

            </section>
        </div>

        <div class="gray-background-fixed"></div>

        <?php require "./common/footer.php"; ?>
    </body>
</html>

