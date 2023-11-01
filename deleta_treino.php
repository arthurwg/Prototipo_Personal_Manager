<?php
header('Content-Type: application/json');
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

include "conecta.php";

$cd_treino = $_POST['deletado'];
$cd_usuario = $_SESSION['cod_usuario'];

$sql = "delete  from treino where cd_usuario = $cd_usuario AND cd_treino = $cd_treino";
$resultado = mysqli_query($conexao,$sql);

if($resultado){
    echo "<h4>Treino deletado com sucesso ! </h4>";
}else{
    echo "<h4>Ocorreu um erro ! </h4>";
}
echo "<br><a href='treinos_salvos.php'>Voltar</a>";
echo "<br><a href='HOME.php'>Home</a>";
?>