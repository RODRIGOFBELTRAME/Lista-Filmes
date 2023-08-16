<?php
        try {
            $userbd = 'root';
            $senhabd = '';
            $bd = 'filmes';
            $conexao = new \PDO('mysql:host=localhost; dbname='. $bd, $userbd, $senhabd);


} catch (\PDOExeption $e) {
            file_put_contents("log.txt", $e->getMessage(), FILE_APPEND | LOCK_EX );
            echo"<div class='alert alert-danger'>Ops, houve um erro no site.</div>";

        }
?>