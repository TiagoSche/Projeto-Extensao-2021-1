
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
  <?php  include "header.php"; 
  $_SESSION["ERRO"] = '';
  ?>

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
            <form method="POST" action="../PHPConsultas/loginOng-action.php" class="form_loginOng">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email_ong" placeholder="Email">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha_ong" placeholder="Senha">
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