<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

include "conecta.php";
?>

<head>
  <!--BootStrap e CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="Css\estiloindex.css">

<!--Scripts-->
<script src="Script/jQuery.js"></script>
<script src="Script/scripts.js"></script>
</head> 

<?php

$cod_usuario = $_SESSION['cod_usuario'];
$sql = "SELECT DISTINCT cd_treino FROM treino WHERE cd_usuario = $cod_usuario ORDER BY cd_treino ASC";
$resultado = mysqli_query($conexao,$sql);
?>
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
    <h2>Seus Treinos</h2><br>
      <?php
        while($linha = mysqli_fetch_assoc($resultado)){
    
          $sql2 = "SELECT treino.cd_treino , treino.nm_treino, treino.series, treino.repeticoes, exercicios.nm_exercicio FROM treino JOIN exercicios ON treino.cd_exercicio = exercicios.cd_exercicio where cd_treino = " . $linha['cd_treino'] . " AND cd_usuario = $cod_usuario";
          $resultado2 = mysqli_query($conexao,$sql2);
          $linhaauxiliar = mysqli_fetch_assoc($resultado2);
          $classe = "treino-". $linhaauxiliar['cd_treino'];
          $nome_treino = $linhaauxiliar['nm_treino'];
          $resultado3 = mysqli_query($conexao,$sql2);
    
      ?>
      <div class="row">
      <?php echo "<div class='$classe'>";?> 
        <div class="col-sm border border-light mx-2">
        
        <?php echo "<h2>$nome_treino</h2>";?>
        </div>  
      </div> 
      <?php 
      echo "</div>";
      ?> 
      <?php    
        while($linha2 = mysqli_fetch_assoc($resultado3)){
        
        

        echo "<div class='$classe'>"; 
        echo "<div class='row mx-2'><div class='col-sm border border-light '><h4>" . $linha2['nm_exercicio'] . "</h4></div>";
        echo "<div class='col-sm border border-light '><h4>Series:" . $linha2['series'] . "</h4></div>";
        echo "<div class='col-sm border border-light '><h4>Repeticoes:" . $linha2['repeticoes'] . "</h4></div>";
        echo "</div>";
        echo "</div>";
        }
        
        
        $cd_treino = $linha['cd_treino'];
      ?> <div class="<?php echo $classe ?>"> <br><button class="btn btn-danger mb-5" onclick ="confirma(this.id)" id="<?php  echo $cd_treino; ?>" type = "button"> Deletar </button></div><?php
    

    

}

      ?>
        <form action="deleta_treino.php" method="post" name="deletar" id="deletado">
        </form>
  </div>
</body>



