<h1>Atores</h1>


<?php

    $sql = "SELECT * FROM atores ORDER BY nome_ator";
    $atores = $conexao->query($sql);

    echo '<ul class="list-group">';
    foreach($atores as $a){

        echo'<li class="list-group-item">';
        echo$a['nome_ator'];
        echo '</li>';
        

    }

    echo '</ul>';
?>