<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

include "conecta.php";
?>
<!--BootStrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<?php

$cod_usuario = $_SESSION['cod_usuario'];

$sql = "select MAX(cd_treino) AS ultimo_treino FROM treino ";
    
    $resultado = mysqli_query($conexao,$sql);
    $linha = mysqli_fetch_assoc($resultado);
    $cd_treino = $linha['ultimo_treino'];
    $cd_treino++;

foreach ($_SESSION['treino'] as $valor){
    $treino = current($_SESSION['treino']);
    $reps = current($_POST['repeticoes']);
    $series = current($_POST['series']);
    $nm_treino = $_POST['nometreino'];

    $sql = "select cd_exercicio from exercicios where nm_exercicio LIKE '$treino'";
    
    $resultado = mysqli_query($conexao,$sql);
    $linha = mysqli_fetch_assoc($resultado);
    $cd_exercicio = $linha['cd_exercicio'];

     
    $sql = "insert into treino(cd_exercicio, cd_usuario,cd_treino,repeticoes,series,nm_treino) VALUES ($cd_exercicio,$cod_usuario,$cd_treino, $reps, $series,'$nm_treino')";
    next($_SESSION['treino']);
    next($_POST['repeticoes']);
    next($_POST['series']);
    mysqli_query($conexao,$sql);
    
}

?> 
<div class="container text-center bg-primary">
    <div class="row vh-100">
        <div class="col-12 d-flex align-items-center justify-content-center">   
            <h2> Treino Salvo com sucesso !<h2>
        </div>        
        <div class="col-12 ">  
                <h5><a class="text-dark" href='treinos_salvos.php'>Ir para treinos</a></h5>
                <h4><a class="text-dark" href='HOME.php'>Home</a>
            </div>
        </div>
    </div>        
</div>