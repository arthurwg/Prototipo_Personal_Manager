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
 <link href="Css/estiloindex.css" rel="stylesheet">

 <!--Scripts-->
 <script src="Script/jQuery.js"></script>
 <script src="Script/scripts.js"></script>
</head>    

<body>

<div class="container  justify-content-center align-items-center bg-primary text-center">

        <div class="row">
            
            <div class="col-sm">
               
                    <img class="imagem_logo_login m-3" src="Logo/personal.webp" class="img-fluid" alt="Responsive image">
                
            </div>
            
        </div>

    
    
<div class="row">
    <div class="col-sm-4">
    </div>

    <div class="col-sm-4"> 
        <form action="valida_login.php" method="POST">
        <label for="emaillabel">Email</label>
        <input  class="form-control" type="text" name="email" id="emaillabel"><br>
        <label for="senhalabel">Senha</label>
        <input class="form-control" type="text" name="senha" id="senhalabel">
        <br><input class="btn bg-light mt-2"  type="reset" name="botao" value="Limpar">
        <input class="btn bg-light mt-2 "type="submit" name="botao" value="Logar">
        </form>
        <br><a class="text-dark" href='form_cad_usuario.php'><h5>Cadastrar-se</h5></a>
    </div>

    <div class="col-sm-4">
    </div>

</div>
<div id='msg'>
<?php 
if(isset($_SESSION['msg'])) { 
    echo   "<br>" . $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>     
    
</div>


</div>

</body>


