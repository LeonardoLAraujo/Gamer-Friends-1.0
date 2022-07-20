<?php
    include 'conexao.php';
    include 'verificarLogin.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal | Gamer Friends</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript - Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" defer></script>
    <!-- Icons - Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!--MENU LATERAL-->
   <nav class="navbar fixed-top" id="menu">
    <div class="container-fluid" >
      <a class="navbar-brand" href="telaPrincipal.php"> <img src="img/logoGameFriends.png" alt="" class="img-fluid"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Configuração</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" href="configuração/perfil.php">Meu Perfil - <?php echo $_SESSION['email'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acessibilidade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Notificação</a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="configuração/privacidade.html">Privacidade Segurança</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Suporte</a>
            </li>
            <li class="nav-item">
              <select class="form-select" aria-label="Default select example">
                <option selected>Seleciona a Cor do Tema</option>
                <option value="1">Branco</option>
                <option value="2">Preto</option>
              </select>
            </li>
            <li class="nav-item">
                <a href="#" id="close" data-bs-toggle="modal" data-bs-target="#modal">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

    <!--Container do Botão sair do Menu lateral-->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                   <h3>Sair</h3>
                   Deseja mesmo sair?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" id="cancelar"> <strong>Cancelar</strong> </button>
                    <a class="btn btn-danger" type="button" href="registrar_entrar/sairConta.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
    
  <div class="container-fluid" id="conteudo">
    <div class="row justify-content-center">
        <div class="col-12" id="title-h2">
            <h2>Comunidade mais acessadas</h2>
        </div>  
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/minecraft.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/pubg-certa.webp" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/smash-bros.webp" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden" id="btn-ca">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden" id="btn-ca">Next</span>
            </button>
          </div>
        </div>
        <div class="col-12" id="title-comunidade">
            <h2>Novas Comunidades</h2>
        </div>
    </div>
  </div>
   
  <!-- MENU DO BOTTOM-->
  <ul class="nav justify-content-center fixed-bottom" id="nav-bottom">
    <li class="nav-item" id="atual">
      <a class="nav-link active" aria-current="page" href="telaPrincipal.php"><i class="bi bi-house-door-fill"></i><br>Início</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="bi bi-people-fill"></i><br>Amigos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="telaPrincipal/buscar.php"><i class="bi bi-search"></i><br>Buscar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="telaPrincipal/comunidade.php"><i class="bi bi-people-fill"></i><br>Comunidade</a>
    </li>
  </ul>
    
</body>
</html>