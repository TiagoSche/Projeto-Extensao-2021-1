<?php
session_start();
//include("../PHPConsultas/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>

    <title>Login</title>
</head>
<body>
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
                        <li class="nav-item"> <a class="nav-link btn btn-warning" href="../PHPPaginas/loginambos.php">LOGIN</a></li>
                    </ul>
                </div>
                
            </div>
            </nav>
        <!--------------------------------------------Login---------------------------------------------
            <form method="POST" action="../PHPConsultas/login-action.php" style="margin: 10% 0% 0% 20%" class="form_login">
                <h2>Login</h2></br>
                <div class="form-col">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email_usuario" placeholder="Email">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha_usuario" placeholder="Senha">
                            <button style="margin-top: 32px;" type="submit" class="btn btn-warning">Entrar</button>
                        </div>
                </div>  
            </form>-->
            <!--------------------------------------------Cadastro----------------------------------------------->
            <form method="POST" action="../PHPConsultas/cadastro-action.php" class="form_registro container">
                <h2>Cadastro de Usuario</h2></br>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Sobrenome</label>
                    <input type="text" class="form-control" id="inputPassword4" name="sobrenome" placeholder="Sobrenome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">CPF</label>
                    <input type="text" class="form-control cpf" id="inputCity" name="cpf_usuario" placeholder="XXX.XXX.XXX-XX">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">E-mail</label>
                    <input type="email" class="form-control" id="inputCity" name="email_usuario" placeholder="example@gmail.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                    <label for="inputNovaSenha">Senha</label>
                    <input type="password" class="form-control" id="inputEmail4" name="senha_usuario" placeholder="Nova Senha">
                </div>
                </div>
                    <button type="submit" class="btn btn-warning">Cadastrar-se</button>
                </div>
                </div>
            </form></br></br></br></br>
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
                        </div>
                    </div>
<script>                  
$(".cpf").mask('000.000.000-00', {reverse: true});
</script>
</body>

</html>