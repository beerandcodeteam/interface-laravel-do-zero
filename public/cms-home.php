<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<?php require "./common/header.php"; ?>
<body>
<?php require "./common/nav-cms.php"; ?>

<header class="common-header">
    <div class="pattern__header"></div>
</header>

<div class="gray-background-fixed"></div>

<!-- Categoria e produto aba -->
<section class="cms__container main-wrapper">
    <header class="cms__container__header">
        <ul class="cms__container__header__tabs">
            <li><a href="cms-home.php" class="tab__active">Categorias e produtos</a></li>
            <li><a href="cms-blog-new-post.php">Gerenciar blog</a></li>
        </ul>
    </header>
    <section class="cms__container__content">

        <h2 class="title-small">Categorias de produtos</h2>
        <p>Para editar a categoria, visualizar ou editar produtos clique no nome da categoria desejada</p>
        <section class="cms__grid__items">

            <a href="cms-edit-category.php" class="item__of__grid">
                <div class="item__infos">
                    <p class="body-large">Mouses</p>
                    <p class="body-medium">14 Produtos</p>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p><img src="./images/edit-icon.svg" alt="">Editar categoria</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir categoria</p>
                    </div>
                </button>
            </a>

            <a href="cms-edit-category.php" class="item__of__grid">
                <div class="item__infos">
                    <p class="body-large">Mouses</p>
                    <p class="body-medium">14 Produtos</p>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p><img src="./images/edit-icon.svg" alt="">Editar categoria</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir categoria</p>
                    </div>
                </button>
            </a>

            <a href="cms-edit-category.php" class="item__of__grid">
                <div class="item__infos">
                    <p class="body-large">Mouses</p>
                    <p class="body-medium">14 Produtos</p>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p><img src="./images/edit-icon.svg" alt="">Editar categoria</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir categoria</p>
                    </div>
                </button>
            </a>

            <a href="cms-edit-category.php" class="item__of__grid">
                <div class="item__infos">
                    <p class="body-large">Mouses</p>
                    <p class="body-medium">14 Produtos</p>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p><img src="./images/edit-icon.svg" alt="">Editar categoria</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir categoria</p>
                    </div>
                </button>
            </a>

            <a href="cms-edit-category.php" class="item__of__grid">
                <div class="item__infos">
                    <p class="body-large">Mouses</p>
                    <p class="body-medium">14 Produtos</p>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p><img src="./images/edit-icon.svg" alt="">Editar categoria</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir categoria</p>
                    </div>
                </button>
            </a>

            <a href="cms-edit-category.php" class="item__of__grid">
                <div class="item__infos">
                    <p class="body-large">Mouses</p>
                    <p class="body-medium">14 Produtos</p>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p><img src="./images/edit-icon.svg" alt="">Editar categoria</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir categoria</p>
                    </div>
                </button>
            </a>


            <a href="cms-new-category.php" class="button add_new button_large" role="button">Adicionar nova
                categoria</a>
        </section>

    </section>
</section>

<!-- Blog aba -->
<section class="cms__container main-wrapper">
    <header class="cms__container__header">
        <ul class="cms__container__header__tabs">
            <li><a href="cms-home.php">Categorias e produtos</a></li>
            <li><a href="cms-home.php" class="tab__active">Gerenciar blog</a></li>
        </ul>
    </header>
    <section class="cms__container__content cms__blog__grid">

        <h2 class="title-small">Suas postagens</h2>
        <p>Para editar uma postagem clique no nome do post, para publicar uma nova, cique em "Adicionar novo post”</p>

        <section class="cms__grid__items">

            <a href="cms-new-post.php" class="button add_new button_large" role="button">Adicionar novo Post</a>

            <a href="cms-edit-post.php" class="item__of__grid button_large">
                <div class="item__infos item__infos__title">
                    <p class="body-medium">Título</p>
                    <p class="body-large">Eras peregrinatione! Raptus, fortis danistas etiam locus de varius, clemens valebat.
                        Observare cito ducunt ad raptus animalis. Cantare nunquam ducunt ad bassus coordinatae.
                        index.</p>
                </div>

                <div class="item__infos item__infos__author">
                    <p class="body-medium">Autor</p>
                    <p class="body-large">Danilo</p>
                </div>
                <div class="item__infos item__infos__date">
                    <p class="body-medium">Título</p>
                    <time class="body-large">20/06/2019</time>
                </div>
                <button class="item__vetical__menu dropdown">
                    <img src="./images/vertical-menu.svg" alt="">
                    <div class="dropdown__content">
                        <p><img src="./images/edit-icon.svg" alt="">Editar postagem</p>
                        <p><img src="./images/delete-icon.svg" alt="">Excluir postagem</p>
                    </div>
                </button>
            </a>

        </section>
    </section>
</section>

<div class="simple-footer main-wrapper">
    <p>CMS</p>
</div>

</body>
</html>

