<?php

require_once 'conexao.php';

$cod = filter_input(INPUT_POST, 'cod_genero', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome_genero', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "UPDATE generos SET nome_genero='$nome' WHERE cod_genero=$cod";

$conexao->query($sql);

header('Location:../index.php?page=genero_lista');