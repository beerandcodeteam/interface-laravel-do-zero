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
                    <h2 class="title-small">Nova categoria</h2>
                    <p>Utilize os campos abaixo para adicionar as informações da categoria</p>

                    <label for="category-name">Nome da categoria</label>
                    <input id="category-name" type="text" tabindex="1" required autofocus placeholder="Ex: Mouses">

                    <span class="label">Imagem de capa</span>
                    <label for="category-img" class="button add_new">Clique para adiconar imagem de capa</label>
                    <input id="category-img" value="Clique para adiconar imagem de capa" type="file" tabindex="2" multiple  accept="image/png, image/jpeg" required>

                </div>
            </section>

            <footer class="cms__container__footer flex-container">
                <div>
                    <button data-modal="success" class="trigger button button_primary">Adicionar nova categoria</button>
                    <a href="cms-home.php" class="button button_secondary" role="button">Cancelar</a>
                </div>
                <div>
                    <a href="javascript:;" class="footer__delete__disabled" role="button">Excluir Categoria</a>
                </div>
            </footer>
        </section>

        <div class="simple-footer main-wrapper">
            <p>CMS</p>
        </div>
    </body>
</html>

