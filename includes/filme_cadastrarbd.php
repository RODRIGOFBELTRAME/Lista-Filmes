<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'conexao.php';

$titulooriginal = filter_input(INPUT_POST, 'titulo_original', FILTER_SANITIZE_SPECIAL_CHARS);

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);

$duracao = filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_NUMBER_INT);

$lancamento = filter_input(INPUT_POST, 'ano_lancamento', FILTER_SANITIZE_SPECIAL_CHARS);

$genero = filter_input(INPUT_POST, 'cod_genero', FILTER_SANITIZE_NUMBER_INT);

$diretor = filter_input(INPUT_POST, 'cod_diretor', FILTER_SANITIZE_NUMBER_INT);

$sql = "INSERT INTO filmes (titulo_original, titulo, duracao, ano_lancamento, cod_genero, cod_diretor) VALUES ('$titulooriginal', '$titulo', '$duracao', '$lancamento', '$genero', '$diretor') ";
$conexao->query($sql);


header('Location: ../index.php');