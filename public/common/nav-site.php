<nav>
    <div class="main-wrapper">
        <div class="flex-container">
            <a class="logotipo" href="index.php">
                <img src="images/Asset 1.svg">
            </a>
            <ul class="navigation__itens" id="menu">
                <li>
                    <a href="index.php">Página principal
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="products.php">Produtos
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="blog.php">Blog
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="sobre.php">Sobre
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="contact.php">Contato
                        <span class="border-effect"></span>
                    </a>
                </li>
            </ul>
            <!-- Hamburger menu -->
            <div id="toggle">
                <div class="span" id="one"></div>
                <div class="span" id="two"></div>
                <div class="span" id="three"></div>
            </div>
        </div>
    </div>
</nav>

<!-- Hamburger menu list -->
<div id="resize">
    <ul id="menu">
        <li><a class="title-medium" href="index.php">Página principal</a></li>
        <li><a class="title-medium" href="products.php">Produtos</a></li>
        <li><a class="title-medium" href="blog.php">Blog</a></li>
        <li><a class="title-medium" href="sobre.php">Sobre</a></li>
        <li><a class="title-medium" href="contact.php">Contato</a></li>
    </ul>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $("#toggle").click(function() {
        $(this).toggleClass('on');
        $("#resize").toggleClass("active");
    });
</script>
