<?php
require('config.php');
require('Usuario.php');

$instituicao = filter_input(INPUT_POST, "instituicao_ong");
$email = filter_input(INPUT_POST, "email_ong", FILTER_VALIDATE_EMAIL);
$registro = filter_input(INPUT_POST, "registro_ong");
$cnpj = filter_input(INPUT_POST, "cnpj_ong");
$senha = filter_input(INPUT_POST, "senha_ong");

$ong = new Usuario($pdo);

if($instituicao && $email && $registro && $cnpj && $senha){
    if($usuario->verificaEmail($email)){
        echo "Esse email ja existe!";
    }else{
        $ong->cadastrarOng($instituicao, $email, $registro, $cnpj, $senha);
    }
}