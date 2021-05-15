<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <?php require "./common/header.php"; ?>
    <body>
        <?php require "./common/nav-site.php"; ?>

        <header class="common-header">
            <div class="header-wrapper">
                <h1 class="title-large">Artigos recentes</h1>
            </div>
            <div class="pattern__header"></div>
        </header>

        <section class="main-wrapper flex-container blog__latest">

            <article class="last__post">
                <a href="post.php">
                    <div class="post__cover">
                        <span class="fade-gradient"></span>
                        <img src="./images/safar-safarov-MSN8TFhJ0is-unsplash.jpg">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="title-medium">Cum tumultumque persuadere, omnes pulchritudinees demitto altus, emeritis valebates. </h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="post.php">
                    <div class="post__cover">
                        <img src="./images/roman-synkevych-vXInUOv1n84-unsplash.jpg">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Compater de emeritis mensa, transferre deus! </h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="post.php">
                    <div class="post__cover">
                        <img src="./images/max-duzij-qAjJk-un3BI-unsplash.jpg">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Palus de altus sectam, aperto advena! </h3>
                    </header>
                </a>
            </article>
        </section>

        <section class="gray-background ">
            <div class="main-wrapper">
                <h2 class="title-large">Artigos anteriores</h2>

                <div class="blog__older">
                    <article class="card__post">
                        <a href="post.php">
                            <div class="post__cover">
                                <img src="./images/blog/blake-connally-B3l0g6HLxr8-unsplash.jpg">
                            </div>
                            <header class="card__post__header">
                                <time class="post__date" datetime="2019-03-29">29 Março, 2019</time>
                                <h3 class="body-large">Cum uria mori, omnes burguses consumere teres, noster resistentiaes. </h3>
                            </header>
                        </a>
                    </article>

                    <article class="card__post">
                        <a href="post.php">
                            <div class="post__cover">
                                <img src="./images/blog/kobu-agency-67L18R4tW_w-unsplash.jpg">
                            </div>
                            <header class="card__post__header">
                                <time class="post__date" datetime="2019-03-29">29 Março, 2019</time>
                                <h3 class="body-large">Cum lapsus mori, omnes rationees contactus brevis, camerarius ignigenaes. </h3>
                            </header>
                        </a>
                    </article>

                    <article class="card__post">
                        <a href="post.php">
                            <div class="post__cover">
                                <img src="./images/blog/markus-spiske-hvSr_CVecVI-unsplash.jpg">
                            </div>
                            <header class="card__post__header">
                                <time class="post__date" datetime="2019-03-29">29 Março, 2019</time>
                                <h3 class="body-large">Hibridas ire in secundus oenipons! Cum historia assimilant. </h3>
                            </header>
                        </a>
                    </article>

                    <article class="card__post">
                        <a href="post.php">
                            <div class="post__cover">
                                <img src="./images/blog/blake-connally-IKUYGCFmfw4-unsplash.jpg">
                            </div>
                            <header class="card__post__header">
                                <time class="post__date" datetime="2019-03-29">29 Março, 2019</time>
                                <h3 class="body-large">Cum orgia potus, omnes liberies resuscitabo velox, festus decores. </h3>
                            </header>
                        </a>
                    </article>
                </div>
                <div class="show-more">
                    <a href="javascript:;" class="button button_secondary">(paginacao padrao do laravel)</a>
                <div>
            </div>
        </section>


        <?php require "./common/footer.php"; ?>
    </body>
</html>

