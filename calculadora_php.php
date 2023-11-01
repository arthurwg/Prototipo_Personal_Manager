<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

?>



<head>
    <title>Home </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gym App">
    <meta name="keywords" content="gym, fitness, workout">
    <meta name="author" content="Arthur Garcia">
    <link rel="stylesheet" href="Css\estiloindex.css">

     <!--BootStrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="Css/estiloindex.css" rel="stylesheet">




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


    <div class="vh-100 d-flex justify-content-center align-items-center bg-primary">
       
        <form action="calcula_imc.php" method="post" id="calculo_enviar">
            <input class="form-control form-control-lg m-2"  type="text" id="peso_usuario" name="peso" placeholder="Digite seu peso: ">
            <input class="form-control form-control-lg m-2" type="text" id="altura_usuario" name="altura" placeholder="Digite sua altura: ">
            <input class="btn bg-light m-2" type="submit">
        </form>
       
</div>

<footer class="bg-dark text-center">
        
        <div class="row m-0">   
            <div class="col-sm text-center"></div>
            <div class="col-sm text-center" style="color: white">arthurweymar@gmail.com</div>
            <div class="col-sm text-center"></div>
        </div>    

    </footer>
    

</body>