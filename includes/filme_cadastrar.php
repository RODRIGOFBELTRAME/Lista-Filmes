<h1>Cadastrar Filme</h1>

    <form action="includes/filme_cadastrarbd.php" method="post">
        <div class="divform mb-3" >
            <label for="titulo_original" class="form-label text-dark" >
                Titulo Original:
                <input class="inputform" type="text" name="titulo_original"  class="form-control" id="titulo_original" required>
            </label>
        </div>
        <div class="divform mb-3" >
            <label for="titulo" class="form-label text-dark" >
                Titulo:
                <input class="inputform" type="text" name="titulo"  class="form-control" id="titulo" required>
            </label>
        </div>
        <div class="divform mb-3" >
            <label for="duracao" class="form-label text-dark" >
                Duração:
                <input class="inputform" type="text" name="duracao"  class="form-control" id="duracao" required>
            </label>
        </div>
        <div class="divform mb-3" >
            <label for="ano_lancamento" class="form-label text-dark" >
                Ano de Lançamento:
                <input class="inputform" type="text" name="ano_lancamento"  class="form-control" id="ano_lancamento" required>
            </label>
        </div>
        <div class="divform mb-3" >
            <label for="cod_genero" class="form-label text-dark" >
                Gênero:
            </label>
            <select class="form-select" name="cod_genero" id="cod_genero">
                <?php
                    $generos = $conexao->query('SELECT*FROM generos ORDER BY nome_genero');
                    foreach($generos as $g){
                        echo '<option value="'.$g['cod_genero'].'">';
                        echo $g['nome_genero'];
                        echo '</option>';
                    }
                ?>
                
            </select>
        </div>
        <div class="divform mb-3" >
            <label for="cod_diretor" class="form-label text-dark" >
                Diretor:
            </label>
            <select class="form-select" name="cod_diretor" id="cod_diretor">
                <?php
                    $diretores = $conexao->query('SELECT*FROM diretores ORDER BY nome_diretor');
                    foreach($diretores as $d){
                        echo '<option value="'.$d['cod_diretor'].'">';
                        echo $d['nome_diretor'];
                        echo '</option>';
                    }
                ?>
                
            </select>
        </div>
        <div class="divform pt-3 pb-3">
            <input class="botao" type="submit" value="Salvar">
        </div>
    </form>