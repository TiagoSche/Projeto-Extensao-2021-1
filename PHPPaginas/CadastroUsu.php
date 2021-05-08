
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
    <?php  include "header.php";
    $_SESSION["ERRO"] = '';
    ?>

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
                    
<script>                  
$(".cpf").mask('000.000.000-00', {reverse: true});
</script>
<?php include "Footer.php";
    ?>
</body>

</html>