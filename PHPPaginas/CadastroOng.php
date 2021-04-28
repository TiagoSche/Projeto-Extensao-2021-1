<?php
    session_start();
   
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

    <title>Login ONG's</title>
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
        <!--------------------------------------------Login ONG----------------------------------------------->
            <!----<form method="$_POST" action="../PHPConsultas/loginOng-action.php" style="margin: 10% 0% 0% 20%" class="form_login">
                <h2>Login ONG</h2></br>
                <div class="form-col">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email_ong" placeholder="Email">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha_ong" placeholder="Senha">
                            <button style="margin-top: 32px;" type="submit" class="btn btn-warning">Entrar</button>
                        </div>
                </div>  
            </form>----->
            <!--------------------------------------------Cadastro ONG----------------------------------------------->
            <form method="POST" action="../PHPConsultas/cadastroOng-action.php" class="form_registro container">
                <h2>Cadastro ONG</h2></br>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputName4">Nome da ONG</label>
                    <input type="text" class="form-control" id="inputEmail4" name="instituicao_ong" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email_ong" placeholder="instituicao@ong.com.br">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                    <label for="inputNumber4">Endereço</label>
                    <input type="text" class="form-control" id="inputNumber4" name="endereco_ong" placeholder="Rua xxx, 210">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <label for="inputNumber4">CEP</label>
                    <input type="text" class="form-control cep" id="inputNumber4" name="cep_ong" placeholder="XX.XXX-XXX">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputNumber4">Telefone</label>
                    <input type="text" class="form-control telefone" id="inputNumber4" name="telefone_ong" placeholder="(XX) XXXXX-XXXX">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputNumber4">CNPJ</label>
                    <input type="text" class="form-control cnpj" id="inputNumber4" name="cnpj_ong" placeholder="XXX.XXX.XXX/XXXX-XX">
                    </div>
                </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição da Instituição</label>
                    <textarea class="form-control form-group col-md-8" id="exampleFormControlTextarea1" rows="3" name="descricao_ong" placeholder="Escreva sobre sua instituição..."></textarea>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" name="senha_ong" placeholder="Senha">
                    </div>
                    <!-- Verificar a função de confirmar senha
                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Confirmar Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" name="confirmaSenha_ong" placeholder="Confirma Senha">
                    </div>-->
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
                        $(".cnpj").mask('000.000.000/0000-00', {reverse: true});
                        $(".telefone").mask('00 00000-0000', {reverse: true});
                        $(".cep").mask('000.000-00', {reverse: true});
                    </script>
</body>
</html>






































