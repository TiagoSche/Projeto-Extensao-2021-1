<?php session_start(); 
$loggedUser = isset($_SESSION['nome_usuario']) && !empty($_SESSION['nome_usuario']);
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/estilo.css">
<style>
</style>

</head>
<body>
  
<!------------------------------------------------------Menu-------------------------------------------------------------> 
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
              </ul>
          </div>
      </div>
    </nav>
    <div class="container">
        <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Login Usuário</h4>
          </div>
        <div class="card-body">
            <!--------------------------------------------Login--------------------------------------------->
            <form method="POST" action="../PHPConsultas/login-action.php" class="form_login">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email_usuario" placeholder="Email">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha_usuario" placeholder="Senha">
                            <button style="margin-top: 32px;" type="submit" class="btn btn-warning">Entrar</button>
                        </div>
            </form>
            <a href="../PHPPaginas/cadastrousu.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Cadastre-se</button></a>
             
        </div>
    </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Login Instituição</h4>
          </div>
          <div class="card-body">
            <!--------------------------------------------Login Ong--------------------------------------------->
            <form method="POST" action="../PHPConsultas/login-action.php" class="form_login">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email_usuario" placeholder="Email">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha_usuario" placeholder="Senha">
                            <button style="margin-top: 32px;" type="submit" class="btn btn-warning">Entrar</button>
                        </div>
            </form>
            <a href="../PHPPaginas/cadastroong.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Cadastre-se</button></a>
             
            </div>
          </div>
        </div>
      </div>
     </div>
    <img class="d-block w-100" src="../IMG/bg-masthead3.jpg" alt="Second slide">    
   
      <div class="rodap"><br><br>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              EstúdioDev 2021/1<p> direitos reservados.</p>
            </div>
            <div class="linha-vertical"></div>
            <div class="col-sm">
              Telefone <p> (47) 2512-3100</p>
              E-mail<p>qualquercoisa@unisociesc.com.br</p>
            </div>
            <div class="linha-vertical"></div>
            <div class="col-sm">
              UniSociesc
            </div>
          </div><br><br>
        </div>
    </div>
    <script>
      var botaoSair = document.querySelector("#botaoSair");
      botaoSair.onclick=function() {
      var diolog = confirm("Deseja mesmo sair?");

      if (!diolog){
        return false;
      }
      
    }
    </script>
</body>
</html>