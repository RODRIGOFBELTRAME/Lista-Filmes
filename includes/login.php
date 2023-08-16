
<h1>Login</h1>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$erro = filter_input(INPUT_GET, 'erro');
$erromsg = '';

if($erro == 1){
    $erromsg = 'Email não cadastrado';
}
elseif($erro == 2){
    $erromsg = 'Senha digitada não confere';
}
if($erromsg){
    echo '<div class="alert alert-danger">';
    echo $erromsg;
    echo '</div>';
}

?>
<form class="divform" action="includes/loginbd.php" method="post">
    <div class="mb-3">
        <label class="text-dark" for="email">E-mail: </label>
        <input class="inputform" type="email" name="email" id="email" required>
    </div>
    <div class="mb-3">
        <label class="text-dark mt-3" for="senha">Senha: </label>
        <input class="inputform" type="password" name="senha" id="senha" required>
    </div>
    <div class="mb-3">
        <input class="botao mt-3" type="submit" value="Entrar">
    </div>
    <div class="mb-3">
        <p class="pb-5" id="p">
            <a href="index.php?page=usuario_cadastrar">CADASTRE-SE</a>
        </p>
    </div>
</form>