<?php
session_start();


?>

<head>
<title>Home </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gym App">    <meta name="keywords" content="gym, fitness, workout">
    <meta name="author" content="Arthur Garcia">

 <!--BootStrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 

<!--Estilo-->
<link rel="stylesheet" href="Css\estiloindex.css">

<!--script-->
<script src="Script/scripts.js"></script>

</head>

<div class="container text-center bg-primary">

    <div class="row">       
       
        <div class="col-sm-3 ">
            <a class="text-dark" href='index.php'><h4>Voltar</h4></a>

        </div>   

    

    </div>

   
    <div class="row">
      
        <div class="col-sm-4">
        </div>    
    
        <div class="col-sm-4">  
            <form onsubmit="return valida_cadastro()" action="cadastro_usuario.php" method="POST" id="cadastro">
          Nome <br><input class="form-control" type="text" name="nome" id="nome"><br>
            <p style ="color:red; text-align: center" id="nome2"></p><br>
        </div>

        <div class="col-sm-4">
        </div>   
    </div>

    <div class="row">
        <div class="col-sm-4">
        </div>    

        <div class="col-sm-4">
            Email<br><input class="form-control mt" type="text" name="email" id="email"><br>
            <p style ="color:red; text-align: center" id="email2"></p><br>
        </div>    

        <div class="col-sm-4">
        </div>    

    </div>

    <div class="row">

        <div class="col-sm-4">
        </div> 

        <div class="col-sm-4">
            Senha<br><input class="form-control" type="password" name="senha" id="senha"><br>
            <p style ="color:red; text-align: center" id="senha2"></p><br>
        </div>

        <div class="col-sm-4">
        </div> 

    </div>

    <div class="row">

        <div class="col-sm-4">
        </div> 

        <div class="col-sm-4">

            Confirma Senha<br><input class="form-control" type = "password" name="confirma" id="confirma"><br>
            <p style ="color:red; text-align: center" id="confirma2"></p><br>

        </div>

        <div class="col-sm-4">
        </div> 

    </div>
    <input class="btn bg-light m-2" type="reset" name="botao" value="Limpar">
    <input class="btn bg-light m-2" type="submit" name="botao" value="Enviar">
    </form>

</div>

