<h1>Cadastro</h1>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$erro = filter_input(INPUT_GET, 'erro');
$erromsg = '';

if($erro == 1){
    $erromsg = 'Usuario já Cadastrado';
}
elseif($erro == 2){
    $erromsg = 'Senhas digitadas não conferem';
}
if($erromsg){
    echo '<div class="alert alert-danger">';
    echo $erromsg;
    echo '</div>';
}

?>

<form class="divform" action="includes/usuario_cadastrarbd.php" method="post">
<div class="mb-3">
        <label class="text-dark" for="email">E-mail: </label>
        <input class="inputform" type="email" name="email" id="email" required>
    </div>
    <div class="mb-3">
        <label class="text-dark mt-3" for="senha">Senha: </label>
        <input class="inputform" type="password" name="senha" id="senha" required>
    </div>
    <div class="mb-3">
        <label class="text-dark mt-3" for="senha">Confirmar Senha: </label>
        <input class="inputform" type="password" name="senha2" id="senha2" required>
    </div>
    <div class="mb-3">
        <input class="botao mt-4" type="submit" value="Cadastrar">
    </div>
    <div class="mb-3">
</form>