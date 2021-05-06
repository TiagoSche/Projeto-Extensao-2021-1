<?php session_start(); 
$logged = isset($_SESSION['nome_usuario']) && !empty($_SESSION['nome_usuario']) || isset($_SESSION['instituicao_ong']) && !empty($_SESSION['instituicao_ong']);
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>

<nav class="navbar navbar-expand-lg " id="mainNav">
      <div class="container">
        <nav class="navbar navbar-dark">
          <div class="dropdown">
            <button class="navbar-toggler bg-warning"  type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="dropdown-content">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">HISTÓRIA</a></li>
                <li class="nav-item"><a class="nav-link" href="#">ONGs</a></li>
                <li class="nav-item"><a class="nav-link" href="#">DOE</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CONTATO</a></li>
                <li class="nav-item"><a class="nav-link btn btn-warning" href="#">LOGIN</a></li>
            </ul>
            </div>    
          </div>
        </nav>
        <a href="../PHPPaginas/index.php"><img src="../IMG/logotipo.png" style="width: 200px;" alt=""></a>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                  <li class="nav-item"><a class="nav-link" href="#">HISTÓRIA</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">| ONGs</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">| DOE</a></li>                     
                  <li class="nav-item"><a class="nav-link" href="#">| CONTATO |</a></li>
                  <li class="nav-item"> <a class="nav-link btn btn-warning" id="<?= ($logged) ? "botaoSair" : "botaoLogin"; ?>" href="../PHPPaginas/<?= ($logged) ? "../phpconsultas/sair" : "loginambos"; ?>.php"><?= ($logged) ? $_SESSION['nome_usuario'] : "LOGIN" ;  ?></a></li>
                  <div class="dropdown"><!---->
                    <img style="margin-left: 20px" class="dropbtn" src="../IMG/login-iconeicon.svg">
                      <div class="dropdown-content">
                        <a href="../PHPPaginas/perfil.php">Meu perfil</a>
                        <a href="../PHPConsultas/sair.php">Sair</a>
                      </div>
                  </div>
              </ul>
          </div>
      </div>
    </nav>