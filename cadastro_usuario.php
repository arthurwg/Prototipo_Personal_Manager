<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

include "conecta.php";

$sql="insert into usuarios (nm_usuario,email,senha) values ('$nome','$email','$senha')";

//echo $sql;

$resultado = mysqli_query($conexao,$sql);

if($resultado)
{
   echo "Cadastro Efetuado com sucesso";
}
else
{
   echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
   echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
}

?>
<br><a href='index.php'>Voltar </a>