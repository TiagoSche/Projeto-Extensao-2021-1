<?php
require('config.php');
require('Usuario.php');

$instituicao = filter_input(INPUT_POST, "instituicao_ong");
$email = filter_input(INPUT_POST, "email_ong", FILTER_VALIDATE_EMAIL);
$cnpj = filter_input(INPUT_POST, "cnpj_ong");
$senha = filter_input(INPUT_POST, "senha_ong");
$cep = filter_input(INPUT_POST, 'cep_ong', FILTER_SANITIZE_STRING, array('options' => array('default' => NULL)));
$telefone = filter_input(INPUT_POST, "telefone_ong");
$descricao = filter_input(INPUT_POST, "descricao_ong");
$endereco = filter_input(INPUT_POST, "endereco_ong");
echo"deu certo";

$ong = new Usuario($pdo);

if($instituicao && $email && $endereco && $cnpj && $senha && $cep && $telefone && $descricao){
    if($ong->verificaEmailOng($email)){
        echo "Esse email ja existe!";
    }else{
        $ong->cadastrarOng($instituicao, $email, $endereco, $cnpj, $senha, $cep, $telefone, $descricao);
        echo"deu certo";
    }
}else{ 
    echo"cep não preenchido";
}