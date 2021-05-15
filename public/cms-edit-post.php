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
                    <li><a href="cms-home.php">Categorias e produtos</a></li>
                    <li><a href="cms-blog-new-post.php" class="tab__active">Gerenciar blog</a></li>
                </ul>
            </header>
            <section class="cms__container__content">
                <div class="split__container">
                    <h2 class="title-small">Editar postagem</h2>
                    <p>Altere a informação dos campos abaixo</p>

                    <label for="post-title">Titulo da postagem</label>
                    <input id="post-title" type="text" tabindex="1" required autofocus placeholder="Ex: Novo produto" value="Mofo-Branco: alta incidência afeta produtividade">

                    <div class="input__group">
                        <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-image.svg" alt=""></span>
                        <label for="img-modal" class="">Imagem.jpg</label>
                        <input id="img-modal" type="file" accept="image/png, image/jpeg" required>
                        <span class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
                    </div>
                </div>

                <hr class="thin_divider_overlap">

                <div class="split__container">
                    <h2 class="title-small">Conteúdo</h2>
                    <p>Preencha o conteudo da postagem</p>










                    <div class="input__container">
                        <label for="paragraphy-1">Parágrafo</label>
                        <textarea id="paragraphy-1" class='autoExpand' rows='3' data-min-rows='3' placeholder="Ex: Estimula a maturação">O fungo causador do mofo-branco afeta mais de 400 espécies de plantas e os danos manifestam-se com maior severidade em regiões com clima chuvoso, temperatura amena e alta umidade relativa do ar. A estimativa é de que 6 milhões de hectares no país, de um total de 70 milhões cultivados, apresentem a praga, o que representa cerca de 9% do total. “A produtividade de soja é elevada em muitas regiões, porém esses resultados nem sempre se repetem em safras sucessivas. Essa inconsistência normalmente é atribuída à monocultura e ao uso de sementes de qualidade duvidosa, que resultam no aumento da ocorrência e intensidade de doenças, principalmente o mofo-branco”, diz o especialista Hercules D. Campos.</textarea>
                        <span class="delete__item"></span>
                    </div>

                    <div class="input__container">
                        <label for="img-modal">Imagem</label>
                        <div class="input__group">
                            <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-image.svg" alt=""></span>
                            <label for="img-modal" class="">Imagem.jpg</label>
                            <input id="img-modal" type="file" accept="image/png, image/jpeg" required>
                            <span class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
                        </div>
                        <span class="delete__item"></span>
                    </div>

                    <div class="input__container">
                        <label for="title-1">Títlulo</label>
                        <input type="text" id="title-1" placeholder="Agora vamos para solução" value="Agora vamos para solução">
                        <span class="delete__item"></span>
                    </div>

                    <div class="input__container">
                        <label for="paragraphy-2">Parágrafo</label>
                        <textarea id="paragraphy-2" class='autoExpand' rows='3' data-min-rows='3' placeholder="Ex: Estimula a maturação">Um fungicida procimidone eficiente no controle do mofo-branco. “Para auxiliar o produtor, oferecemos esta solução liquida, fixação superior e partículas micronizadas, o que proporciona facilidade no preparo da calda, melhor recobrimento, maior período de controle e segurança”, destaca Marco Cunha, gerente de Produtos Inseticida e Fungicida da empresa.</textarea>
                        <span class="delete__item"></span>
                    </div>

                    <div class="input__container">
                        <label for="gallery-modal">Galeria de imagens</label>
                        <div class="input__group">
                            <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-gallery.svg" alt=""></span>
                            <label for="gallery-modal">Imagem.jpg</label>
                            <input id="gallery-modal" type="file" multiple accept="image/png, image/jpeg" required>
                            <span class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
                        </div>
                        <div class="input__group">
                            <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-gallery.svg" alt=""></span>
                            <label for="gallery-modal">Imagem.jpg</label>
                            <input id="gallery-modal" type="file" multiple accept="image/png, image/jpeg" required>
                            <span class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
                        </div>
                        <div class="input__group">
                            <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-gallery.svg" alt=""></span>
                            <label for="gallery-modal">Imagem.jpg</label>
                            <input id="gallery-modal" type="file" multiple accept="image/png, image/jpeg" required>
                            <span class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
                            <span class="delete__item"></span>
                        </div>
                        <span class="delete__item"></span>
                    </div>

                    <div class="input__container">
                        <label for="paragraphy-3">Parágrafo</label>
                        <textarea id="paragraphy-3" class='autoExpand' rows='3' data-min-rows='3' placeholder="Ex: Estimula a maturação">Um fungicida procimidone eficiente no controle do mofo-branco. “Para auxiliar o produtor, oferecemos esta solução liquida, fixação superior e partículas micronizadas, o que proporciona facilidade no preparo da calda, melhor recobrimento, maior período de controle e segurança”, destaca Marco Cunha, gerente de Produtos Inseticida e Fungicida da empresa.</textarea>
                        <span class="delete__item"></span>
                    </div>

                    <div class="input__container">
                        <label for="video-modal">Video</label>
                        <div class="input__group">
                            <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-video.svg" alt=""></span>
                            <input id="video-modal" type="text" tabindex="1" required autofocus placeholder="Cole a URL do video aqui" value="https://www.youtube.com/watch?v=LiU8rirQChk">
                            <pan class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
                        </div>
                        <span class="delete__item"></span>
                    </div>




                    <hr class="thin_divider">

                    <div class="blog__toolbar">
                        <div class="blog__toolbar__container">
                            <button data-modal="gallery" class="trigger blog__toolbar__button"><img src="./images/toolbar/toolbar-gallery.svg" alt="">Galeria</button>
                            <button data-modal="image" class="trigger blog__toolbar__button"><img src="./images/toolbar/toolbar-image.svg" alt="">Imagem</button>
                            <button data-modal="video" class="trigger blog__toolbar__button"><img src="./images/toolbar/toolbar-video.svg" alt="">Vídeo</button>
                            <button class="blog__toolbar__button"><img src="./images/toolbar/toolbar-title.svg" alt="">Título</button>
                            <button class="blog__toolbar__button"><img src="./images/toolbar/toolbar-paragraph.svg" alt="">Parágrafo</button>
                        </div>
                    </div>
                </div>
            </section>


            <footer class="cms__container__footer flex-container">
                <div>
                    <a href="javascript:;" class="button button_disabled" role="button">Salvar edição</a>
                    <a href="cms-home.php" class="button button_disabled" role="button">Cancelar</a>
                </div>
                <div>
                    <a href="javascript:;" class="footer__delete" role="button">Excluir postagem</a>
                </div>
            </footer>
        </section>



        <div class="simple-footer main-wrapper">
            <p>CMS</p>
        </div>
    </body>
    <script>
    // Applied globally on all textareas with the "autoExpand" class
    $(document)
        .one('focus.autoExpand', 'textarea.autoExpand', function(){
            var savedValue = this.value;
            this.value = '';
            this.baseScrollHeight = this.scrollHeight;
            this.value = savedValue;
        })
        .on('input.autoExpand', 'textarea.autoExpand', function(){
            var minRows = this.getAttribute('data-min-rows')|0, rows;
            this.rows = minRows;
            rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
            this.rows = minRows + rows;
        });
    </script>

</html>

