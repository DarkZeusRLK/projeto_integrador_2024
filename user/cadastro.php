<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/globals.css" />
    <link rel="stylesheet" href="../css/cadastro.css" />
  </head>
  <body>
  <nav class="navbar">
    <div class="logo">
        <img id="logo" src="../Imagens/logo (1).png" alt="Logo">   
    </div>
    <h1 class="text-logo"><b><a class="text-title" href="../index.php">IVAÍTOUR</a></b></h1>
    <ul class="topics">
        <li><a href="page/contato.php">Contato</a></li>
        <li><a href="page/patrocinadores.php">Patrocinadores</a></li>
        <li><a href="page/ajuda.php">Ajuda</a></li>
    </ul>
    <div class="account">
        <div class="avatar">
            <img src="../Imagens/avatar.png" alt="Avatar">
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
    <div class="container">
      <form action="">
        <div class="div">
          <img class="cadastro-de-clientes" src="https://c.animaapp.com/PLVHvckZ/img/cadastro-de-clientes.png" />
          
          <div class="overlap-group">
            <label class="text-wrapper">Nome completo:</label>
            <input type="text" class="rectangle" />
          </div>
          
          <div class="overlap"> 
            <label class="text-wrapper">Telefone:</label>
            <input type="tel" class="rectangle" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" />
          </div>
          
          <div class="overlap email-overlap">
            <label class="text-wrapper-2">Email:</label>
            <input type="email" class="rectangle-2" />
          </div>
          
          <div class="overlap-2">
            <label class="text-wrapper-3">Senha:</label>
            <input type="password" class="rectangle-3" />
          </div>
          
          <div class="div-wrapper">
            <button type="submit" class="text-wrapper-4">CADASTRAR</button>
          </div>
        </div>
      </form>
    </div>
    <br>
    <br>
    <div class="borda">

    </div>
    <?php
        include("../static/footer.php");
    ?>
  </body>
</html>
