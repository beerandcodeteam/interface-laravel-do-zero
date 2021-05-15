<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <?php require "./common/header.php"; ?>
    <body>
        <?php require "./common/nav-cms.php"; ?>

        <header class="common-header">
            <div class="pattern__header"></div>
        </header>

        <div class="gray-background-fixed"></div>

        <section class="cms__container main-wrapper">
            <header class="cms__container__header">
                <ul class="cms__container__header__tabs">
                    <li><a href="cms-home.php" class="tab__active">Categorias e produtos</a></li>
                    <li><a href="javascript:;">Gerenciar blog</a></li>
                </ul>
            </header>
            <section class="cms__container__content">
                <div class="split__container">
                    <h2 class="title-small">Informações da categoria</h2>
                    <p>Utilize os campos abaixo para adicionar as informações da categoria</p>

                    <label for="category-name">Nome da categoria</label>
                    <input id="category-name" type="text" tabindex="1" required  placeholder="Ex: Mouses"
                           value="Mouses">

                    <label for="img-product-cover">Imagem de capa</label>
                    <div class="input__group">
                        <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-image.svg" alt=""></span>
                        <label for="img-product-cover" class="">Imagem.jpg</label>
                        <input id="img-product-cover" type="file" accept="image/png, image/jpeg" required>
                        <span class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
                    </div>

                    <span class="hint">Clique no nome da imagem para carregar uma nova</span>
                </div>
                <hr class="thin_divider_overlap">

                <h2 class="title-small">Todos os produtos dessa categoria</h2>
                <p>Clique no nome do produto desejado para editar as informações ou em "Adicionar novo produto” para adicionar</p>

                <!-- Todos os produtos da categoria-->
                <section class="cms__grid__items">

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Mouse Razer</p>
                            <p class="body-medium">400 dpi</p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Mouse Multilaser</p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">NUNQUAM FALLERE LIXA. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Nunquam imperium medicina. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Nunquam aperto gabalium. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Nunquam resuscitabo extum. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Humani generis placidus luba est. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Axona, musa, et classis. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Gemna rusticus ignigena est. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Lamia magnum classis est. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Cur secula manducare? </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-edit-product.php" class="item__of__grid">
                        <div class="item__infos">
                            <p class="body-large">Lura, palus, et amicitia. </p>
                        </div>
                        <button class="item__vetical__menu dropdown">
                            <img src="./images/vertical-menu.svg" alt="">
                            <div class="dropdown__content">
                                <p><img src="./images/edit-icon.svg" alt="">Editar produto</p>
                                <p><img src="./images/delete-icon.svg" alt="">Excluir produto</p>
                            </div>
                        </button>
                    </a>

                    <a href="cms-new-product.php" class="button add_new button_large" role="button">Adicionar novo produto</a>
                </section>
            </section>

            <footer class="cms__container__footer flex-container">
                <div>
                    <a href="javascript:;" class="button button_disabled" role="button">Salvar edição</a>
                    <a href="cms-home.php" class="button button_disabled" role="button">Cancelar</a>
                </div>
                <div>
                    <button data-modal="delete" class="trigger footer__delete">Excluir Categoria</button>
                </div>
            </footer>
        </section>

        <div class="simple-footer main-wrapper">
            <p>CMS</p>
        </div>
    </body>
</html>

