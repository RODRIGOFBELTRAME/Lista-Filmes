<h1>Gêneros</h1>


<?php
    $sql = "SELECT * FROM generos ORDER BY nome_genero";
    $generos = $conexao->query($sql);

    echo '<ul class="list-group">';
    foreach($generos as $g){

        echo'<li class="list-group-item">';
        echo$g['nome_genero'];
        echo '<a class="text-danger float-end ms-4" href="includes/genero_apagar.php?id='.$g['cod_genero'].'"> X</a>';
        echo '<a class="text-warning float-end" href="index.php?page=genero_editar&id='.$g['cod_genero'].'"> <i class="bi bi-pencil-square"></i></a>';
        echo '</li>';
        

    }

    echo '</ul>';
?>