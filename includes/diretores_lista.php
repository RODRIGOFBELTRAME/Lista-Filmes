<h1>Diretores</h1>


<?php
    $sql = "SELECT * FROM diretores ORDER BY nome_diretor";
    $diretores = $conexao->query($sql);

    echo '<ul class="list-group">';
    foreach($diretores as $d){

        echo'<li class="list-group-item">';
        echo$d['nome_diretor'];
        echo '</li>';
        

    }

    echo '</ul>';
?>