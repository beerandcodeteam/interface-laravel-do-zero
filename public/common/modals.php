 <!-- Modal de video -->
 <div id="modal--video" class="modal modal__medium">
    <div class="modal__header">
        <img src="../images/toolbar/toolbar-video.svg" alt="">
        <h2 class="title-small">Url para o video</h2>
    </div>
    <div class="modal__content">
        <label for="video-modal">Video</label>
        <div class="input__group">
            <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-video.svg" alt=""></span>
            <input id="video-modal" type="text" tabindex="1" required autofocus placeholder="Cole a URL do video aqui">
            <pan class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
        </div>
    </div>
    <div class="modal__footer">
        <button class="button button_primary">Adicionar video ao post</button>
        <button class="button button_secondary">Cancelar</button>
    </div>
</div>

<!-- modal imagem -->
<div id="modal--image" class="modal modal__medium">
    <div class="modal__header">
        <img src="../images/toolbar/toolbar-image.svg" alt="">
        <h2 class="title-small">Selecione a imagem</h2>
    </div>
    <div class="modal__content">
        <label for="img-modal" class="modal__drop__area">Arraste e solte sua imagem aqui ou<br> clique para procurar</label>
        <input id="img-modal" type="file" accept="image/png, image/jpeg" required>
        
        <div class="input__group">
            <span class="input__group__icon__left"><img src="./images/toolbar/toolbar-image.svg" alt=""></span>
            <label for="img-modal" class="">Imagem.jpg</label>
            <input id="img-modal" type="file" accept="image/png, image/jpeg" required>
            <span class="input__group__icon__right"><img src="./images/check-icon-success-input-file.svg" alt=""></span>
        </div>
    </div>

    <div class="modal__footer">
        <button class="button button_primary">Adicionar imagem ao post</button>
        <button class="button button_secondary">Cancelar</button>
    </div>
</div>

<!-- modal gallery -->
<div id="modal--gallery" class="modal modal__medium">
    <div class="modal__header">
        <img src="../images/toolbar/toolbar-gallery.svg" alt="">
        <h2 class="title-small">Selecione as imagens para a galeria</h2>
    </div>
    <div class="modal__content">
        <label for="gallery-modal" class="modal__drop__area">
            <span>Arraste e solte sua imagem aqui ou<br> clique para procurar</span> 
            <span>No recurso de galeria você pode adicionar de 1 a 6 imagens</span>
        </label>
        
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
        </div>
    </div>

    <div class="modal__footer">
        <button class="button button_primary">Adicionar imagens ao post</button>
        <button class="button button_secondary">Cancelar</button>
    </div>
</div>

<!-- Delete modal -->
<div id="modal--delete" class="modal modal__small">
    <div class="modal__content">
        <img src="../images/disco-delete-modal.svg" alt="">
        <p>
            Deseja excluir essa categoria?<br>
            Caso a categoria possua algum produto cadastrado ele também será excluido
        </p>
        <button class="button button_danger">Excluir categoria</button>
    </div>
</div>

<!-- Delete success -->
<div id="modal--success" class="modal modal__small">
    <div class="modal__content">
        <img src="../images/hands-success-modal.svg" alt="">
        <p>Tudo certo, suas alterações foram ralizadas com sucesso</p>
        <button class="button button_primary">Ir para home</button>
    </div>
</div>


<div class="overlay"></div>


<script type="text/javascript">
$(document).ready(function() {
    $(".trigger").click(function() {
        $(".overlay").show();
        $("#modal--" + $(this).data("modal")).toggleClass("show-modal");
    });

    $(".close-button").click(function(e) {
        e.preventDefault();
        $(this).parent().parent().toggleClass("show-modal");
        $(".overlay").hide();
    });

    $(".overlay").click(function() {
        $(".modal").each(function() {
            $(this).removeClass("show-modal");
        });
        $(".overlay").hide();
    });
});
</script>