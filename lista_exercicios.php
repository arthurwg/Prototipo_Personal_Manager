<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

include "conecta.php";
$sql = "select * from exercicios";
$resultado = mysqli_query($conexao,$sql);
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
            <h2><a href="HOME.php">Voltar</a></h2>
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
    <?php
    while($linha = mysqli_fetch_assoc($resultado)){
        $valor = $linha['nm_exercicio'];
    ?>
        <h2><br><?php echo "$valor" ?> </h2>
           <br><button onclick="adiciona('<?php echo $valor ?>')"  id="<?php echo "$valor" ?>" value="<?php echo "$valor" ?>" style="margin-left: 10px" type="button">Adicionar</button> 
            <button onclick="remove('<?php echo $valor ?>')" style="margin-left: 10px" type="button">remover</button> 
            <?php echo "<br>" ?>      
    <?php
    }
    ?>
    <form action="definicoes.php" method="post" id="enviar"><br>
    <h2><input style="margin-left: 10px" type="submit"  value="Avançar" />
    <br>
</form> 

<br>
</div>
</body>

<script>
    function adiciona(idElemento){
    var exercicio = document.getElementById(idElemento);  
    var form = document.getElementById("enviar");
    var campoOculto = document.createElement("input");
    campoOculto.type = "hidden";
    campoOculto.name = exercicio.id;
    campoOculto.value = exercicio.value;
    form.appendChild(campoOculto);

   exercicio.style.backgroundColor = "green";
    
    }

   
</script>

<script>
     function remove(remover){
        var formulario = document.getElementById("enviar");
        var exercicio = document.getElementsByName(remover);
        formulario.removeChild(exercicio[0]);
        
        
        var padrao = document.getElementById(remover);
        padrao.style.backgroundColor = "#E5E5E5";
        

    }
    </script>

