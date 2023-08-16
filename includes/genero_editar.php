<?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT*FROM generos WHERE cod_genero=$id";
$generos = $conexao->query($sql);
$genero = $generos->fetch();

if(!$genero){
    header('Location:index.php?page=genero_lista');
}


?>

<h1>Editar Gêneros</h1>

    <form action="includes/genero_editarbd.php" method="post">
        <div class="divform mb-3" >
            <label for="nome_genero" class="form-label text-dark" >
                Nome do Gênero:
                <input class="inputform" type="text" name="nome_genero"  class="form-control" id="nome_genero" 
                value="<?=$genero['nome_genero']?>" required>
                <input type="hidden" name="cod_genero" value="<?=$id?>">
            </label>
        </div>
        <div class="divform mb-3">
            <input class="botao" type="submit" value="Salvar">
        </div>
    </form>