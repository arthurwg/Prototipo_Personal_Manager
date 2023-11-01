<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

?>

    <link rel="stylesheet" href="Css\estiloindex.css">
    
    <div id="container_central">
        <h4><a href='calculadora_php.php'>Voltar</a>
            <div class="centralizar_meio">
    
    <br>
    <?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura) ;

    echo "<h2>Seu IMC é: $imc</h2>";
?>
</div>
</div>
