<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlverificar = "SELECT id FROM usuarios WHERE email='$email'";

$resultadoverificar = mysqli_query($conexao, $sqlverificar);

if (mysqli_num_rows($resultadoverificar) > 0){
    header("location: cadastro.php?erro=email");
    exit();
} 

$senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhacriptografada')";

mysqli_query($conexao, $sql);

header("Location: login.php");
exit();

?>