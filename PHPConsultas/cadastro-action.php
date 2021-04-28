<?php
require('config.php');
require('Usuario.php');

$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email_usuario", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha_usuario");
$sobrenome = filter_input(INPUT_POST, "sobrenome");
$cpf = filter_input(INPUT_POST, "cpf_usuario");



$usuario = new Usuario($pdo);

if($nome && $email && $senha && $sobrenome && $cpf){
    if($usuario->verificaEmail($email)){
        echo "Esse email ja existe!";
    }else{
        $usuario->cadastrarUsuario($email, $nome, $senha, $sobrenome, $cpf);
    }
}