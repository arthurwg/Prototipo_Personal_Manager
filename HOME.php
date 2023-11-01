
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
    <meta name="description" content="Gym App">    <meta name="keywords" content="gym, fitness, workout">
    <meta name="author" content="Arthur Garcia">

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
            <h2><a href="index.php">Sair</a></h2>
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


    <div class="container bg-primary p-3">

            <div class="row">

                    <div class="col-sm text-center"> &nbsp</div>                   
            </div>   

            <div class="row">

                    <div class="col-sm text-center"> &nbsp</div>
            </div>           
            <div class = "row">
                <div class="col-sm text-center"><h3>Lista de Exercícios</h3></div>
                <div class="col-sm text-center"><h3>Treinos Salvos</h3></div>
                <div class="col-sm text-center"><h3>Calculadora</h3></div>
            </div>    
            <div class = "row">
                <div class="col-sm text-center"> <a href ="lista_exercicios.php"><img src="Logo/exercicios.png"></a></div>
                <div class="col-sm text-center"><a href ="treinos_salvos.php"><img src="Logo/logo_lista.png"></a></div>
                <div class="col-sm text-center"><a href ="calculadora_php.php"><img src="Logo/calculadora.png"></a></div>
            </div>

            <section>
               
                    
             
                <div class="row">
                    <div class="col-sm text-center"> &nbsp</div>
                    
                </div>   
                <div class="row">
                    <div class="col-sm text-center"> &nbsp</div>
                    
                </div>   
                <div class="row">
                    <div class="col-sm text-center"> &nbsp</div>
                    
                </div>   

            </section>

</div>


    <footer class="bg-dark text-center">
        
        <div class="row m-0">   
            <div class="col-sm text-center"></div>
            <div class="col-sm text-center" style="color: white">arthurweymar@gmail.com</div>
            <div class="col-sm text-center"></div>
        </div>    

    </footer>
 

</body>