<nav class="navbar">
    <div class="logo">
        <img id="logo" src="Imagens/logo (1).png" alt="Logo">   
    </div>
    <h1 class="text-logo"><b><a class="text-title" href="../index.php">IVAÍTOUR</a></b></h1>
    <ul class="topics">
        <li><a href="page/contato.php">Contato</a></li>
        <li><a href="page/patrocinadores.php">Patrocinadores</a></li>
        <li><a href="page/ajuda.php">Ajuda</a></li>
    </ul>
    <div class="account">
        <div class="avatar">
            <img src="Imagens/avatar.png" alt="Avatar">
        </div>
        <div class="dropdown">
            <ul>
                <li><a href="#">Configurações</a></li>
                <li><a href="#">Ajuda</a></li>
                <?php
                    if(isset($_SESSION["nome"])){
                        echo "<li><a href='#'>Sair</a></li>";
                    }else{
                        echo "<li><a href='user/login.php'>Entrar</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>