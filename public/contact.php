<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <?php require "./common/header.php"; ?>
    <body>
        <?php require "./common/nav-site.php"; ?>
        <div class="gray-background">
            <section class="contact__block contact-wrapper">
                <h1 class="display-medium">Cur gemna ire? </h1>
                <p>Hercle, abnoba dexter!, racana! Hippotoxota noceres, tanquam gratis luna. Lotus, noster lactas rare captis de fortis, audax omnia.</p>
                <section class="contact__options">

                    <form class="contact__form">
                        <label for="text">Nome completo</label>
                        <input id="text" name="FullName" type="text" required tabindex="1" placeholder="Ex: José da Silva" autofocus>

                        <label for="text">Email</label>
                        <input id="email" name="mail" type="email" required tabindex="2" placeholder="Ex: email@email.com.br">

                        <label for="message">Mensagem</label>
                        <textarea id="message" name="WrirteMessage"  required tabindex="3"  cols="20" rows="4" placeholder="Digite aqui..."></textarea>

                        <button class="button button_primary" type="submit">Enviar mensagem</button>
                    </form>

                    <div class="contact__infos">
                        <div>
                            <div class="contact__infos__header">
                                <img src="./images/phone-contact-icon.svg" alt="">
                                <h3 class="title-small">Contato por telefone</h3>
                            </div>
                            <a title="clique no número do telefone para ligar" href="tel:169999999">(16) 99999-9999</a>
                        </div>

                        <div>
                            <div class="contact__infos__header">
                                <img src="./images/mail-contact-icon.svg" alt="">
                                <h3 class="title-small">Contato por email</h3>
                            </div>
                            <a title="Clique no email para enviar email automatico" href="mailto:hortus ">finis </a>
                        </div>

                        <div>
                            <div class="contact__infos__header">
                                <img src="./images/pin-map-contact-icon.svg" alt="">
                                <h3 class="title-small">Lumens nocere! </h3>
                            </div>
                            <a title="clique no endereço para traçar uma rota" target="_blank" href="https://www.google.com/maps/dir//Av.+Braz+Olaia+Acosta,+727+-+Jardim+California,+Ribeir%C3%A3o+Preto+-+SP,+14026-040/@-21.2117135,-47.8201906,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94b9beccaaa6dccd:0xc472dcfb494d66a5!2m2!1d-47.8180019!2d-21.2117135">
                                Av. Brasil, 333<br>
                                Ribeirão Preto<br>
                                Bairro Brasil - Ribeirão Preto/SP<br>
                                CEP: 14444-020
                            </a>
                        </div>
                        <section class="contact__infos__social-media">
                            <a href="https://www.facebook.com/fertgaia/" target="_blank">Facebook /</a>
                            <a href="javascript:;"> YouTube</a>
                        </section>
                    </div>
                </section>
            </section>
        </div>

        <?php require "./common/footer.php"; ?>
    </body>

</html>

