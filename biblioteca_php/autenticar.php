<?php

session_start();

include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'"; // " * " significa ALL, ou seja SELECT ALL FROM usuarios

$resultado = mysqli_query($conexao, $sql);

$usuario = mysqli_fetch_assoc($resultado);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['nome'] = $usuario['nome'];
    header("Location:painel.php");
    exit();
} else {
    header("Location:index.php?erro=login");
}

?>