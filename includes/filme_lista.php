<h1>Filmes</h1>

<form id="formfilmes" action="" method="get">
    <input type="search" name="pesquisa" id="pesquisa" placehoader="titulo">
    <input type="submit" value="pesquisar">
</form>

<?php
    $p = filter_input(INPUT_GET, 'pesquisa', FILTER_SANITIZE_SPECIAL_CHARS);
    if($p){
        echo "Pesquisando por $p...";
    }


    $sql = "SELECT * FROM filmes WHERE titulo LIKE '%$p%' ORDER BY titulo";
    $filmes = $conexao->query($sql);

    echo '<ul class="list-group">';
    foreach($filmes as $f){

        echo'<li class="list-group-item">';
        echo '<a href="index.php?page=filme_ver&cod_filme='.$f['cod_filme'].'">';
        echo$f['titulo'].' - '.$f['ano_lancamento'];
        echo'</a>';
        echo '</li>';
        

    }

    echo '</ul>';
?>