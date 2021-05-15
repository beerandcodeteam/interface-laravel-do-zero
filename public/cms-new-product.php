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

                    <label for="category-name" class="label__disabled">Nome da categoria</label>
                    <input id="category-name" class="input_disabled" type="text" disabled placeholder="Ex: Mouses">

                    <label for="img-product-cover" class="label__disabled">Imagem de capa</label>
                    <div class="input__group input__group__disabled">
                        <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-image.svg" alt=""></span>
                        <label for="img-product-cover" class="">Imagem.jpg</label>
                        <input id="img-product-cover" type="file" accept="image/png, image/jpeg" required>
                        <span class="input__group__icon__right"><img src="./images/check-icon-disabled-input-file.svg" alt=""></span>
                    </div>
                </div>

                    <hr class="thin_divider_overlap">

                <div class="split__container">

                    <!-- Conteudo do produto -->
                    <h2 class="title-small">Novo produto</h2>
                    <p>Adicione um novo produto a essa categoria</p>

                    <label for="product-name">Nome do produto</label>
                    <input id="product-name" type="text" autofocus required tabindex="1" placeholder="Ex: Mouse Razer">

                    <label for="product-description">Descrição</label>
                    <textarea id="product-description" cols="30" rows="auto" required tabindex="2" placeholder="Ex: Mouse top com 400dpi"></textarea>

                    <h2 class="title-small">Etiqueta de produto exclusivo</h2>
                    <p>Ative este campo para adicionar uma etiqueta de exclusividade</p>

                    <div class="toggle__container">
                        <div class="toggle__holder toggle__holder__active">
                            <p>Mostrar como exclusivo</p>
                            <div class="toggle toggle--active"></div>
                        </div>
                    </div>

                </div>
            </section>

            <footer class="cms__container__footer flex-container">
                <div>
                    <a href="javascript:;" class="button button_primary" role="button">Adicionar novo produto</a>
                    <a href="cms-home.php" class="button button_secondary" role="button">Cancelar</a>
                </div>
                <div>
                    <a href="javascript:;" class="footer__delete__disabled" role="button">Excluir Produto</a>
                </div>
            </footer>
        </section>

        <div class="simple-footer main-wrapper">
            <p>CMS</p>
        </div>
    </body>
</html>

