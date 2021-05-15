<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <?php require "./common/header.php"; ?>
    <body>
        <?php require "./common/nav-site.php"; ?>
        <div class="gray-background">
            <div class="login__center main-wrapper">
                <form class="form__login">
                    <div class="form__login__header flex-container">
                        <img src="./images/Login-Icon.svg" alt="Login icon">
                        <h2 class="title-small">CMS<h2>
                    </div>
                    <div class="form__login__content">
                        <label for="mail">Digite seu email</label>
                        <input type="text" id="mail" required tabindex="1" autofocus placeholder="email@email.com.br">

                        <label for="password">Digite sua senha</label>
                        <input type="password" id="password" required tabindex="2" placeholder="••••••••••••">

                        <a href="cms-home.php" class="button button_primary" role="button">login</a>
                    </div>
                </form>
            </div>
        </div>


        <?php require "./common/footer.php"; ?>
    </body>

</html>

