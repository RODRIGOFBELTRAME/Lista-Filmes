<!DOCTYPE html>
<html lang="en">
<head>
    


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <title>Filmes</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">FILMASSOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active text-light" href="index.php">Filmes <i class="bi bi-film"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=genero_lista">Gêneros <i class="bi bi-hash"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=ator_lista">Atores <i class="bi bi-people-fill"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=filme_cadastrar">Cadastrar Filme <i class="bi bi-plus-square-fill"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=genero_cadastrar">Cadastrar Gênero <i class="bi bi-plus-square-fill"></i></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="index.php?page=diretores_lista">Diretores <i class="bi bi-binoculars-fill"></i></a>
            </li>
            <?php
                session_start();
                if(!isset($_SESSION['cod'])):
            ?>
                <li class="nav-item">
                <a class="nav-link float-end text-light ms-5 me-2" href="index.php?page=login">Login <i class="bi bi-info-square-fill"></i></a>
                </li>
            <?php endif ?>
        </ul>
        </div>
    </div>
    </nav>

    <main>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

          require_once 'includes/conexao.php';
            $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if(file_exists("includes/$page.php")){
                require_once "includes/$page.php";
            }          
            else{
                require_once 'includes/filme_lista.php';
            }

/*
            switch($page){
                case "listafilmes";
                    require_once 'includes/filme_lista.php';
                    break;
                case "verfilme";
                    require_once 'includes/filme_ver.php';
                    break;
                default:
                    require_once 'includes/filme_lista.php';
            }*/


            

    ?>

    
        </main>

</body>
</html>