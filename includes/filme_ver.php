<?php
    //pegar o cod do filme da url
    $cod = filter_input(INPUT_GET,'cod_filme',FILTER_SANITIZE_NUMBER_INT);
    //monta sql
    $sql = "SELECT filmes.*, diretores.nome_diretor, generos.nome_genero FROM filmes, diretores, generos WHERE diretores.cod_diretor=filmes.cod_diretor and cod_filme=$cod";
    //busca a coleção de resultados
    $filmes = $conexao->query($sql);
    //pega o primeiro filme de coleção
    $filme = $filmes->fetch();
    //imprimir as informações
    echo "<h1>".$filme['titulo']."</h1>";
    echo '<p>Título original: '.$filme['titulo_original'].'</p>';
    echo '<p>Lançamento: '.$filme['ano_lancamento'].'</p>';
    echo '<p>Duração: '.$filme['duracao'].'</p>';
    echo '<p>Diretor: '.$filme['nome_diretor'].'</p>';
    echo '<p>Genêro: '.$filme['nome_genero'].'</p>';
    echo '<p><a href="index.php">Voltar</a></p>';
?>