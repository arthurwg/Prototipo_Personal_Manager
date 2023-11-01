<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}


?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="Css\estiloindex.css">

</head>

<body>
<nav class="navbar bg-dark">
<div class="container">
    
        <navbar-brand>
            <img style="width: 6em;" src="Logo\personal.webp">
        </navbar-brand>
        <nav-item>
            <h2><a href="lista_exercicios.php">Voltar</a></h2>
        </nav-item>
        <nav-item>
            <h2><a href="HOME.php">Home</a></h2>
        </nav-item>
        <nav-item>
            <h2><a href="Feedback.html">PlaceHolder</a></h2>
        </nav-item>
        <nav-item>
            <h2><a href="X">PlaceHolder</a></h2>
        </nav-item>

</div>
    </nav>
<div class="container text-center bg-primary">
<form action="processar.php" method="POST">

<?php

$_SESSION['treino'] = $_POST;

foreach ($_POST as $chave => $valor) {
    
     echo "<p class='m-0'><h4>$valor</h4><br>" ?> <input class="form-control-lg" type="text" name="series[]" placeholder="Numero de series"><br>
    <?php echo "<br>" ?> <input class="form-control-lg" type="text" name="repeticoes[]" placeholder="Numero de repeticoes"><br><br>
    <?php
    
}
?>
<p><h4>Nome do Treino</h4><br><input class="form-control-lg" type="text" name="nometreino" placeholder="Nomeie seu treino">
<input class="btn bg-light" type="submit" value="Enviar">
<d/iv>
</body>