<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

require_once 'conexao.php';

$sql = "SELECT*FROM usuario WHERE email='$email'";
$users = $conexao->query($sql);

if(!$users->rowCount()){
    header('Location:../index.php?page=login&erro=1');
    exit;
}

$user = $users->fetch();

if(password_verify($senha, $user['senha'])){
    session_start();
    $_SESSION['cod'] = $user['cod'];
    header('Location:../index.php');
    exit;
}
else{
    header('Location:../index.php?page=login&erro=2');
    exit;
}