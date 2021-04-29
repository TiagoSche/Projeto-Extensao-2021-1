<?php session_start(); 
$logged = isset($_SESSION['nome_usuario']) && !empty($_SESSION['nome_usuario']) || isset($_SESSION['instituicao_ong']) && !empty($_SESSION['instituicao_ong']);
?>


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
                  <li class="nav-item"> <a class="nav-link btn btn-warning" id="<?= ($logged) ? "botaoSair" : "botaoLogin"; ?>" href="../PHPPaginas/<?= ($logged) ? "../phpconsultas/sair" : "loginambos"; ?>.php"><?= ($logged) ? $_SESSION['nome_usuario'] : "LOGIN";  ?></a></li>
              </ul>
          </div>
      </div>
    </nav>