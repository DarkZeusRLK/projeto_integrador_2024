<header>
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../Imagens/viking.png.png" alt="Logo Taverna de Valhalla" class="logo-img">
            </a>
            <span class="logo-text">
                <a href="../index.php">Taverna de Valhalla</a>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        <path d="M18.709 5.1C18.209 4.6 17.509 4.3 16.809 4.3H13.309L11.009 1.1C10.709 0.7 10.309 0.5 9.90902 0.5H8.20902C7.70902 0.5 7.30902 0.8 7.00902 1.2C6.80902 1.6 6.80902 2.1 7.00902 2.6L7.80902 4.4H4.90902L4.20902 2.8C4.10902 2.6 3.90902 2.5 3.70902 2.5L1.90902 2.4C1.40902 2.4 1.00902 2.6 0.709017 3C0.509017 3.4 0.409017 3.9 0.609017 4.4L2.30902 8.4C2.70902 9.3 3.50902 9.8 4.40902 9.8H6.90902L5.20902 13.5C5.00902 13.9 5.00902 14.4 5.20902 14.9C5.40902 15.3 5.90902 15.6 6.40902 15.6H8.00902C8.40902 15.6 8.80902 15.4 9.10902 15.1L13.109 9.9H16.809C17.509 9.9 18.209 9.7 18.709 9.2C19.209 8.7 19.509 8 19.509 7.3C19.509 6.3 19.209 5.6 18.709 5.1ZM7.90902 2.1C7.80902 2 7.80902 1.8 7.90902 1.7C8.00902 1.6 8.10902 1.5 8.20902 1.5H9.90902C10.009 1.5 10.109 1.6 10.209 1.7L12.009 4.3H8.90902L7.90902 2.1ZM18.009 8.3C17.709 8.6 17.309 8.8 16.809 8.8H12.809C12.609 8.8 12.509 8.9 12.409 9L8.30902 14.4C8.20902 14.5 8.10902 14.5 8.00902 14.5H6.40902C6.30902 14.5 6.20902 14.4 6.10902 14.3C6.00902 14.2 6.00902 14 6.00902 13.9L8.00902 9.5C8.10902 9.3 8.10902 9.1 8.00902 9C7.90902 8.9 7.70902 8.8 7.60902 8.8H4.30902C3.80902 8.8 3.40902 8.5 3.10902 8L1.50902 4C1.40902 3.9 1.50902 3.7 1.50902 3.6C1.60902 3.5 1.70902 3.4 1.80902 3.4L3.30902 3.5L4.10902 5.1C4.20902 5.3 4.40902 5.4 4.60902 5.4H16.809C17.209 5.4 17.709 5.6 18.009 5.9C18.309 6.2 18.509 6.7 18.509 7.2C18.509 7.5 18.309 8 18.009 8.3Z"></path>
                            Passagens</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a id="nav-link2" class="nav-link" href="../page/champ.php">Champanhe</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../page/vodka.php">Vodka</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../page/whisky.php">Uísque</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../page/rum.php">Rum</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../page/vinhos.php">Vinhos</a>
                            </li>
                            <li class="nav-item">
                                <a id="nav-link" class="nav-link" href="../page/conhaque.php">Conhaque</a>
                            </li>
                        </ul>
                        <?php
                            if(isset($_SESSION['id_login'])){
                        ?>
                        <li class="nav-item">
                        <a class="nav-link" href="../page/carrinho.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z" />
                            </svg> Carrinho</a>
                    </li>
                    <?php
                            }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../page/novidades.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                            </svg> Novidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../page/contato.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> Contato</a>
                    </li>
                    </li>
                    <?php
                    if (isset($_SESSION['id_login_adm'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../adm/dashboard.php"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                </svg> Painel</a>
                        </li>
                        </li>
                    <?php
                    }
                    ?>
                    <?php
                    if (!isset($_SESSION['id_login'])) {
                        if (!isset($_SESSION['id_login_adm'])) {
                    ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg></i>
                                    Minha conta</a>
                        <?php
                        }
                    }
                        ?>
                        <?php
                        if (isset($_SESSION['nome'])) {

                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg></i>
                                    <?php echo $_SESSION['nome']; ?></a>
                            <?php
                        }
                            ?>
                            <ul class="dropdown-menu">
                                <?php
                                if (!isset($_SESSION['nome'])) {
                                ?>
                                    <li class="nav-item">
                                        <a id="nav-link2" class="nav-link" href="../user/login.php">Entrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="nav-link" class="nav-link" href="../user/cadastro.php">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="nav-link2" class="nav-link" href="../adm/cadastro/login_adm.php">Login de Administrador</a>
                                    </li>
                                <?php
                                } else {
                                ?>

                                    <?php
                                    if (isset($_SESSION['id_login_adm'])) {

                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../adm/conta_adm.php">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                                </svg>
                                                Minhas Informações</a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if (isset($_SESSION['id_login_adm'])) {

                                    ?>
                                        <li class="nav-item">
                                            <a id="nav-link" class="nav-link" href="../Projeto_Integrador/adm/cadastro/cadastro_adm.php">Cadastrar Administrador</a>
                                        </li>
                                    <?php
                                    }
                                    ?>


                                    <li class="nav-item">
                                        <a class="nav-link" id="logout" href="../Projeto_Integrador/static/logout.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg>
                                            Sair</a>
                                    </li>
                                    <?php
                                    if (isset($_SESSION['id_login'])) {

                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../user/conta.php">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z" />
                                                </svg>
                                                Minhas Informações</a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                <?php
                                }
                                ?>
                            </ul>
                            </form>
            </div>
        </div>
    </nav>
</header>