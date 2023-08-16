<?php

require_once 'conexao.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');
$senha2 = filter_input(INPUT_POST, 'senha2');

if($senha != $senha2){
    header('Location:../index.php?page=usuario_cadastrar&erro=2');
    exit;
}

$u = $conexao->query("SELECT * FROM usuario WHERE email='$email'");
if($u->rowCount()>0){
    header('Location:../index.php?page=usuario_cadastrar&erro=1');
    exit;
}

$hash = password_hash($senha, PASSWORD_BCRYPT);



$conexao->query("INSERT INTO usuario(email, senha) VALUES('$email', '$hash')");
header('Location:../index.php?page=login');